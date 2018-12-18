<?php

/* social_links.html */
class __TwigTemplate_cbb181c4f7042b5d52b5ca906273fbb04a894919702a78257f0d04ae8248f354 extends Twig_Template
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
        echo "\t\t<div class=\"socialinks\">
\t\t\t<ul>
\t\t\t\t";
        // line 3
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 4
            echo "\t\t\t\t<li>
\t\t\t\t\t<a type=\"application/rss+xml\" href=\"";
            // line 5
            echo ($context["U_FEED"] ?? null);
            echo "\">
\t\t\t\t\t\t<i class=\"icon fp-feed\" title=\"";
            // line 6
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
            echo " - ";
            echo ($context["SITENAME"] ?? null);
            echo "\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"www.blogger.com\" title=\"Blogger\">
\t\t\t\t\t\t<i class=\"icon fp-blogger\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"http://www.dailymotion.com/fr\" title=\"Dailymotion\">
\t\t\t\t\t\t<i class=\"icon fp-dailymotion\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://fr-fr.facebook.com/\" title=\"Facebook\">
\t\t\t\t\t\t<i class=\"icon fp-facebook\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://www.flickr.com/\" title=\"Flickr\">
\t\t\t\t\t\t<i class=\"icon fp-flickr\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://github.com/\" title=\"Github\">
\t\t\t\t\t\t<i class=\"icon fp-github\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://plus.google.com/\" title=\"Google plus\">
\t\t\t\t\t\t<i class=\"icon fp-googleplus\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://www.instagram.com/\" title=\"Instagram\">
\t\t\t\t\t\t<i class=\"icon fp-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"http://line.me/fr/\" title=\"Line messenger\">
\t\t\t\t\t\t<i class=\"icon fp-line\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://fr.linkedin.com/\" title=\"Linked in\">
\t\t\t\t\t\t<i class=\"icon fp-linkedin\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://myspace.com/\" title=\"Myspace\">
\t\t\t\t\t\t<i class=\"icon fp-myspace\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://fr.pinterest.com/\" title=\"Pinterest\">
\t\t\t\t\t\t<i class=\"icon fp-pinterest\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://www.reddit.com/\" title=\"Reddit\">
\t\t\t\t\t\t<i class=\"icon fp-reddit\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://www.skype.com/fr/\" title=\"Skype\">
\t\t\t\t\t\t<i class=\"icon fp-skype\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://www.snapchat.com/l/fr-fr/\" title=\"Snapchat\">
\t\t\t\t\t\t<i class=\"icon fp-snapchat\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://soundcloud.com/\" title=\"Soundcloud\">
\t\t\t\t\t\t<i class=\"icon fp-soundcloud\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"http://store.steampowered.com/\" title=\"Steam\">
\t\t\t\t\t\t<i class=\"icon fp-steam\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://www.tumblr.com/\" title=\"Tumblr\">
\t\t\t\t\t\t<i class=\"icon fp-tumblr\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://twitter.com/?lang=fr\" title=\"Twitter\">
\t\t\t\t\t\t<i class=\"icon fp-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://www.viber.com/fr/\" title=\"Viber\">
\t\t\t\t\t\t<i class=\"icon fp-viber\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://www.whatsapp.com/?l=fr\" title=\"Whatsapp\">
\t\t\t\t\t\t<i class=\"icon fp-whatsapp\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://fr.wordpress.com/\" title=\"Wordpress\">
\t\t\t\t\t\t<i class=\"icon fp-wordpress\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t\t<!-- <li>
\t\t\t\t\t<a href=\"https://www.youtube.com/\" title=\"Youtube\">
\t\t\t\t\t\t<i class=\"icon fp-youtube\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li> -->
\t\t\t</ul>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "social_links.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "social_links.html", "");
    }
}
