import mysql.connector
import configparser
import tarfile
import os

Config = configparser.ConfigParser()
Config.optionxform = str

Config.read("package.ini")

Config.sections()
['frontEndPackage', 'backEndPackage', 'DMZPackage']

def ConfigSectionMap(section):
    dict1 = {}
    options = Config.options(section)
    for option in options:
        try:
            dict1[option] = Config.get(section, option)
            if dict1[option] == -1:
                DebugPrint("skip: %s" % option)
        except:
            print("exception on %s!" % option)
            dict1[option] = None
    return dict1

def install():
    installIP = input("Enter the IP of the machine to install to: ")
    selection = input("\n Enter a package name to install: ")

    latestRollback = input ("Enter 1 to install latest package enter 2 to rollback: ")
    if latestRollback == "1":

        mycursor2 = cnx.cursor()

        mycursor2.execute("SELECT version FROM versions WHERE type='" + selection + "'")

        latest = mycursor2.fetchall()

        versions = []
        for version in latest:
            versions.append(version[0])
            print(versions)

        latestVersion = max(versions)

        packageName = selection + str(latestVersion) + ".tar.gz"

        os.system("scp " + "linux490@" + deploymentIP + ":/packages/" + selection + str(latestVersion) + ".tar.gz linux490@" + installIP + ":/packages")
        os.system("ssh linux490@" + installIP + " 'tar xf /packages/" + packageName + " -C /packages/unzipped/'")
        #os.system("ssh linux490@" + installIP + " cp -a /packages/unzipped/" + selection.lower() + "/. /var/www/html")
        os.system("ssh linux490@" + installIP + " cp -a /packages/unzipped/" + " /var/www/html")

    if latestRollback == "2":
        mycursor = cnx.cursor()

        mycursor.execute("SELECT version FROM versions WHERE type='" + selection + "' and stable=1")
        latest = mycursor.fetchall()

        versions = []
        for version in latest:
            versions.append(version[0])
            print(versions)

        latestStable = max(versions)

        packageName = selection + str(latestStable) + ".tar.gz"

        os.system("scp " + "linux490@" + deploymentIP + ":/packages/" + packageName + " linux490@" + installIP + ":/packages")
        os.system("ssh linux490@" + installIP + " 'tar xf /packages/" + packageName + " -C /packages/unzipped/'")
        #os.system("ssh linux490@" + installIP + " cp -a /packages/unzipped/" + selection.lower() + "/. /var/www/html")
        os.system("ssh linux490@" + installIP + " cp -a /packages/unzipped/" + " /var/www/html")

def build():
    print("You can make a package for:")
    for sections in Config.sections():
        print(sections)

    selection = input("\n Enter a package name to build: ")
    directory = input("Enter your working directory (default /var/www/html/ NOTE: USE TRAILING SLASH: \n")
    if directory == "":
        directory = "/var/www/html/"
    isStable = input("is stable?(y/n): ")
    if isStable == "y":
        stable = 1
    else:
        stable = 0

    mycursor = cnx.cursor()

    mycursor.execute("SELECT version FROM versions WHERE type='" + selection + "'")

    latest = mycursor.fetchall()

    versions=[]
    for version in latest:
        versions.append(version[0])
        print(versions)

    prevVersion = max(versions)

    newVersion = prevVersion + 1

    sql = "INSERT INTO versions (filename, type, version, stable) VALUES (%s, %s, %s, %s)"
    val = (selection + str(newVersion) + ".tar.gz", selection, newVersion, stable)
    mycursor.execute(sql, val)
    cnx.commit()

    packageName = selection + str(newVersion) + ".tar.gz"

    tar = tarfile.open(packageName, "w:gz")
    for files in ConfigSectionMap(selection):
        tar.add(directory + files, files)
    tar.close()

    os.system("scp " + selection + str(newVersion) + ".tar.gz linux490@" + deploymentIP + ":/packages")

deploymentIP = input("Enter the IP of the deployment server (default is 192.168.0.50): ")
if deploymentIP == "":
    deploymentIP = "192.168.0.50"

cnx = mysql.connector.connect(user='test', password='4321Password.',
                              host=deploymentIP,
                              database='deployment')

buildInstall = input("Enter 1 for build and 2 for install?: ")
if buildInstall == "1":
    build()
if buildInstall == "2":
    install()
