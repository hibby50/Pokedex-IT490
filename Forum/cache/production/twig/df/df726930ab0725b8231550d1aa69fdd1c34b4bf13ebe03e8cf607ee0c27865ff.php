<?php

/* viewforum_body.html */
class __TwigTemplate_780233ad0b0936fe94646a3bc7cfdf56b84ba728427796735e063972501f0d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        echo "<h2 class=\"forum-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 4
        // line 5
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 6
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 8
            if (($context["FORUM_DESC"] ?? null)) {
                echo "<div style=\"display: none !important;\">";
                echo ($context["FORUM_DESC"] ?? null);
                echo "<br /></div>";
            }
            // line 9
            echo "\t";
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
                }
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 10
            echo "</div>
";
        }
        // line 12
        echo "
";
        // line 13
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 14
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 17
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 18
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 21
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 23
            echo "
\t\t</div>
\t</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 29
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 29)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 31
        echo "
";
        // line 32
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 33
            echo "\t<div class=\"action-bar bar-top\">

\t";
            // line 35
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 36
                echo "\t\t\t";
                // line 37
                echo "
\t\t<a href=\"";
                // line 38
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 39
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 40
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                    echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                    echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 44
                echo "\t\t</a>
\t\t\t";
                // line 45
                // line 46
                echo "\t\t\t";
                $location = "viewforum_forum_tools.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("viewforum_forum_tools.html", "viewforum_body.html", 46)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 47
                echo "\t";
            }
            // line 48
            echo "
\t";
            // line 49
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 50
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 51
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 53
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 54
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 55
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 57
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 58
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t\t";
                // line 60
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 65
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 67
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t";
            // line 68
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 69
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 69)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 70
                echo "\t\t";
            } else {
                // line 71
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 73
            echo "\t</div>

\t</div>
";
        }
        // line 77
        echo "
";
        // line 78
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 79
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 82
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 86
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 87
                echo "
\t\t<form action=\"";
                // line 88
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 94
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 98
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 99
                echo ($context["USERNAME"] ?? null);
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 102
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
                // line 104
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 105
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 109
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 111
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 121
            echo "
";
        }
        // line 123
        echo "
";
        // line 124
        // line 125
        echo "
";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 127
            echo "
\t";
            // line 128
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 129
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 133
            echo "
\t";
            // line 134
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 135
                echo "\t\t<div class=\"forumbg";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo " announcement";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt";
                // line 140
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 141
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 142
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 143
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 149
            echo "
\t\t";
            // line 150
            // line 151
            echo "\t\t<li class=\"row";
            if (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " global-announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " sticky";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t\t";
            // line 152
            // line 153
            echo "\t\t\t<dl class=\"row-item ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", array());
            echo "\">
\t\t\t\t<dt";
            // line 154
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && ($context["S_TOPIC_ICONS"] ?? null))) {
                echo " style=\"background-image: url(";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat; position: relative\"";
            }
            echo " title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t";
            // line 155
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array()) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\" class=\"row-item-link\"></a>";
            }
            // line 156
            echo "
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 158
            // line 159
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array()) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 160
                echo "\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 161
                echo ($context["NEW_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            }
            // line 165
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                // line 166
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array())) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED");
                }
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 167
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array())) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED");
                }
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 170
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array())) {
                // line 171
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 172
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                // line 176
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 177
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
            // line 181
            // line 182
            echo "
\t\t\t\t\t\t";
            // line 183
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 184
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 185
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</a>
\t\t\t\t\t\t\t";
                // line 186
                if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                    echo "</a>";
                }
                // line 187
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 188
                if ($this->getAttribute($context["topicrow"], "REPLIES", array())) {
                    // line 189
                    echo "\t\t\t\t\t\t\t<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                    echo "</strong></span>
\t\t\t\t\t\t";
                }
                // line 191
                echo "\t\t\t\t\t\t";
            }
            // line 192
            echo "
\t\t\t\t\t\t<div class=\"topic-poster responsive-hide left-box\">
\t\t\t\t\t\t\t";
            // line 194
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", array())) {
                echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 195
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 196
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "
\t\t\t\t\t\t\t";
            // line 197
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                echo "</a>";
            }
            // line 198
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 200
            if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                // line 201
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 205
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 206
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 207
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 208
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 209
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a class=\"button\" href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 211
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 215
            echo "
\t\t\t\t\t\t";
            // line 216
            // line 217
            echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
            // line 219
            echo $this->getAttribute($context["topicrow"], "REPLIES", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
            // line 220
            echo $this->getAttribute($context["topicrow"], "VIEWS", array());
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t<span><dfn>";
            // line 222
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t\t";
            // line 223
            if (( !($context["S_IS_BOT"] ?? null) && $this->getAttribute($context["topicrow"], "U_LAST_POST", array()))) {
                // line 224
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 225
                echo ($context["VIEW_LATEST_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 228
            echo "\t\t\t\t\t\t<br />";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "
\t\t\t\t\t</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            // line 232
            // line 233
            echo "\t\t</li>
\t\t";
            // line 234
            // line 235
            echo "
\t";
            // line 236
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 237
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 241
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 243
            echo "\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 244
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 246
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            } elseif ( !            // line 249
($context["S_HAS_SUBFORUM"] ?? null)) {
                // line 250
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 252
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS_IN_CATEGORY");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "
";
        // line 258
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 259
            echo "\t<div class=\"action-bar bar-bottom\">
\t\t";
            // line 260
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 261
                echo "\t\t\t";
                // line 262
                echo "
\t\t\t<a href=\"";
                // line 263
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 264
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 265
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                    echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 267
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                    echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 269
                echo "\t\t\t</a>

\t\t\t";
                // line 271
                // line 272
                echo "\t\t\t";
                $location = "viewforum_forum_tools.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("viewforum_forum_tools.html", "viewforum_body.html", 272)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 273
                echo "\t\t";
            }
            // line 274
            echo "
\t\t";
            // line 275
            if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 276
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["S_FORUM_ACTION"] ?? null);
                echo "\">
\t\t\t";
                // line 277
                $location = "display_options.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("display_options.html", "viewforum_body.html", 277)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 278
                echo "\t\t\t</form>
\t\t";
            }
            // line 280
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 282
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t";
            // line 283
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 284
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 284)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 285
                echo "\t\t\t";
            } else {
                // line 286
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 288
            echo "\t\t</div>
\t</div>
";
        }
        // line 291
        echo "
";
        // line 292
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 292)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 293
        echo "
";
        // line 294
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 295
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 296
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 297
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 300
        echo "
";
        // line 301
        if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
            // line 302
            echo "\t<div class=\"stat-block permissions\">
\t\t<h3>";
            // line 303
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t<p>";
            // line 304
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "rules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo $this->getAttribute($context["rules"], "RULE", array());
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t</div>
";
        }
        // line 307
        echo "
";
        // line 308
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 308)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1011 => 308,  1008 => 307,  994 => 304,  990 => 303,  987 => 302,  985 => 301,  982 => 300,  976 => 297,  970 => 296,  967 => 295,  965 => 294,  962 => 293,  950 => 292,  947 => 291,  942 => 288,  936 => 286,  933 => 285,  920 => 284,  918 => 283,  914 => 282,  910 => 280,  906 => 278,  894 => 277,  889 => 276,  887 => 275,  884 => 274,  881 => 273,  868 => 272,  867 => 271,  863 => 269,  857 => 267,  851 => 265,  849 => 264,  839 => 263,  836 => 262,  834 => 261,  832 => 260,  829 => 259,  827 => 258,  824 => 257,  813 => 252,  809 => 250,  807 => 249,  801 => 246,  797 => 244,  794 => 243,  788 => 241,  782 => 237,  780 => 236,  777 => 235,  776 => 234,  773 => 233,  772 => 232,  764 => 228,  758 => 225,  751 => 224,  749 => 223,  741 => 222,  734 => 220,  728 => 219,  724 => 217,  723 => 216,  720 => 215,  715 => 212,  709 => 211,  699 => 209,  697 => 208,  691 => 207,  684 => 206,  681 => 205,  677 => 204,  672 => 201,  670 => 200,  666 => 198,  656 => 197,  647 => 196,  642 => 195,  638 => 194,  634 => 192,  631 => 191,  622 => 189,  620 => 188,  617 => 187,  605 => 186,  591 => 185,  588 => 184,  586 => 183,  583 => 182,  582 => 181,  579 => 180,  573 => 177,  566 => 176,  563 => 175,  557 => 172,  550 => 171,  547 => 170,  537 => 167,  526 => 166,  523 => 165,  512 => 164,  506 => 161,  501 => 160,  498 => 159,  497 => 158,  493 => 156,  487 => 155,  476 => 154,  471 => 153,  470 => 152,  449 => 151,  448 => 150,  445 => 149,  436 => 143,  432 => 142,  428 => 141,  414 => 140,  403 => 135,  401 => 134,  398 => 133,  392 => 129,  390 => 128,  387 => 127,  382 => 126,  379 => 125,  378 => 124,  375 => 123,  371 => 121,  358 => 111,  353 => 109,  345 => 105,  339 => 104,  333 => 102,  327 => 99,  322 => 98,  305 => 94,  296 => 88,  293 => 87,  291 => 86,  284 => 82,  279 => 79,  277 => 78,  274 => 77,  268 => 73,  262 => 71,  259 => 70,  246 => 69,  244 => 68,  240 => 67,  236 => 65,  228 => 60,  223 => 58,  217 => 57,  212 => 55,  208 => 54,  204 => 53,  199 => 51,  196 => 50,  194 => 49,  191 => 48,  188 => 47,  175 => 46,  174 => 45,  171 => 44,  165 => 42,  159 => 40,  157 => 39,  147 => 38,  144 => 37,  142 => 36,  140 => 35,  136 => 33,  134 => 32,  131 => 31,  117 => 29,  115 => 28,  112 => 27,  106 => 23,  101 => 21,  96 => 20,  88 => 18,  86 => 17,  77 => 14,  75 => 13,  72 => 12,  68 => 10,  54 => 9,  48 => 8,  44 => 6,  42 => 5,  41 => 4,  32 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewforum_body.html", "");
    }
}
