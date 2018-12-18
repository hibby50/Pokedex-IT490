<?php

/* navbar_top.html */
class __TwigTemplate_26f98d8395685cafc616f7634174d20a3171e57cf5f5c35be20aa0f14ef912e4 extends Twig_Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"navbar-container\">
\t<div class=\"inner\">

\t<ul id=\"nav-main\" class=\"nav-main linklist\" role=\"menubar\">

\t\t<li id=\"quick-links\" class=\"quick-links dropdown-container responsive-menu";
        // line 7
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t<a href=\"#\" class=\"dropdown-trigger\">
\t\t\t\t<i class=\"icon fa-bars fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_LINKS");
        echo "</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t";
        // line 14
        // line 15
        echo "
\t\t\t\t\t";
        // line 16
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 18
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 19
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 20
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 21
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 26
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 27
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 28
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 33
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 34
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 35
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 41
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 46
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 56
        echo "
\t\t\t\t\t";
        // line 57
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 58
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 59
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 60
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 61
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 62
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 67
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 68
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 69
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 73
            echo "\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t\t";
        // line 76
        // line 77
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>

\t\t";
        // line 81
        // line 82
        echo "\t\t<li ";
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t\t<a href=\"";
        // line 83
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 84
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        // line 87
        // line 88
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 89
            echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 90
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 91
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 95
        echo "\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 96
            echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 97
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 98
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 102
        echo "
\t";
        // line 103
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 104
            echo "\t\t";
            // line 105
            echo "\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t";
            // line 106
            // line 107
            echo "\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t<a href=\"";
            // line 108
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            }
            echo " ";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t";
            // line 112
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 113
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 114
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 115
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 119
            echo "
\t\t\t\t\t";
            // line 120
            // line 121
            echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 123
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 124
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 128
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 129
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
            // line 133
            // line 134
            echo "
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 137
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 138
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 144
            // line 145
            echo "\t\t</li>
\t\t";
            // line 146
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 147
                echo "\t\t\t<li class=\"rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 148
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 149
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGES");
                echo " </span><strong class=\"badge";
                if ( !($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 153
            echo "\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 154
                echo "\t\t\t<li class=\"dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 155
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">
\t\t\t\t\t<i class=\"icon fa-bell fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 156
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo " </span><strong class=\"badge";
                if ( !($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t</a>
\t\t\t\t";
                // line 158
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_top.html", 158)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 159
                echo "\t\t\t</li>
\t\t";
            }
            // line 161
            echo "\t\t";
            // line 162
            echo "\t";
        } else {
            // line 163
            echo "\t\t<li class=\"rightside\"  data-skip-responsive=\"true\">
\t\t\t<a href=\"";
            // line 164
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 165
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 168
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 169
                echo "\t\t\t<li class=\"rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 170
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-pencil-square-o  fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 171
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 175
            echo "\t\t";
            // line 176
            echo "\t";
        }
        // line 177
        echo "\t</ul>
\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "navbar_top.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 177,  460 => 176,  458 => 175,  451 => 171,  447 => 170,  444 => 169,  442 => 168,  436 => 165,  430 => 164,  427 => 163,  424 => 162,  422 => 161,  418 => 159,  406 => 158,  395 => 156,  391 => 155,  386 => 154,  383 => 153,  370 => 149,  366 => 148,  363 => 147,  361 => 146,  358 => 145,  357 => 144,  348 => 138,  342 => 137,  337 => 134,  336 => 133,  329 => 129,  323 => 128,  316 => 124,  310 => 123,  306 => 121,  305 => 120,  302 => 119,  295 => 115,  291 => 114,  288 => 113,  286 => 112,  272 => 108,  269 => 107,  268 => 106,  261 => 105,  259 => 104,  257 => 103,  254 => 102,  247 => 98,  241 => 97,  238 => 96,  235 => 95,  228 => 91,  222 => 90,  219 => 89,  216 => 88,  215 => 87,  209 => 84,  203 => 83,  194 => 82,  193 => 81,  187 => 77,  186 => 76,  182 => 74,  179 => 73,  172 => 69,  168 => 68,  165 => 67,  162 => 66,  155 => 62,  151 => 61,  148 => 60,  146 => 59,  143 => 58,  141 => 57,  138 => 56,  131 => 52,  127 => 51,  119 => 46,  115 => 45,  108 => 41,  104 => 40,  101 => 39,  94 => 35,  90 => 34,  87 => 33,  84 => 32,  77 => 28,  73 => 27,  70 => 26,  67 => 25,  60 => 21,  56 => 20,  53 => 19,  51 => 18,  48 => 17,  46 => 16,  43 => 15,  42 => 14,  34 => 9,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar_top.html", "");
    }
}
