<?php

/* index_body.html */
class __TwigTemplate_89c1d59ebe9b0bc96990327d977276662a892b10e4a38a890b4d4c9bc6e9d05e extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "

";
        // line 6
        // line 7
        echo "
";
        // line 8
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "
";
        // line 10
        // line 11
        echo "
";
        // line 12
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 13
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"stat-block\">
\t<h3><a href=\"";
            // line 14
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
\t\t<fieldset class=\"quick-login\">
\t\t\t<label for=\"username\"><span>";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 17
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 18
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 19
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 21
            echo "\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 22
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 24
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 25
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 29
        echo "
";
        // line 30
        // line 31
        echo "
";
        // line 32
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 33
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 34
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 35
            echo "\t\t<p class=\"icon-online-list\">
\t\t\t";
            // line 36
            // line 37
            echo "\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                echo ($context["CURRENT_TIME"] ?? null);
                echo "<br />";
            }
            // line 38
            echo "\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE_EXPLAIN");
            echo ")<br />
\t\t\t";
            // line 39
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 40
                echo "\t\t\t\t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t";
                // line 41
                if (($context["LEGEND"] ?? null)) {
                    echo "<br /><em>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 42
                echo "\t\t\t";
            }
            // line 43
            echo "\t\t\t";
            // line 44
            echo "\t\t</p>
\t</div>
";
        }
        // line 47
        echo "
";
        // line 48
        // line 49
        echo "
";
        // line 50
        if ((($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null) && ($context["BIRTHDAY_LIST"] ?? null))) {
            // line 51
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p class=\"icon-birthday-list\">
\t\t\t";
            // line 54
            // line 55
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BIRTHDAYS");
            }
            // line 56
            echo "\t\t\t";
            // line 57
            echo "\t\t</p>
\t</div>
";
        }
        // line 60
        echo "
";
        // line 61
        if (($context["NEWEST_USER"] ?? null)) {
            // line 62
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 63
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
            echo "</h3>
\t\t<p class=\"icon-statistics\">
\t\t\t";
            // line 65
            // line 66
            echo "\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                echo ($context["LAST_VISIT_DATE"] ?? null);
                echo "<br />";
            } else {
                echo ($context["CURRENT_TIME"] ?? null);
                echo "<br />";
            }
            // line 67
            echo "\t\t\t";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /><br />
\t\t\t";
            // line 68
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
\t\t\t";
            // line 69
            // line 70
            echo "\t\t</p>
\t</div>
";
        }
        // line 73
        echo "
";
        // line 74
        // line 75
        echo "
";
        // line 76
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 76)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 76,  295 => 75,  294 => 74,  291 => 73,  286 => 70,  285 => 69,  275 => 68,  270 => 67,  261 => 66,  260 => 65,  255 => 63,  252 => 62,  250 => 61,  247 => 60,  242 => 57,  240 => 56,  214 => 55,  213 => 54,  208 => 52,  205 => 51,  203 => 50,  200 => 49,  199 => 48,  196 => 47,  191 => 44,  189 => 43,  186 => 42,  177 => 41,  172 => 40,  170 => 39,  163 => 38,  157 => 37,  156 => 36,  153 => 35,  141 => 34,  138 => 33,  136 => 32,  133 => 31,  132 => 30,  129 => 29,  122 => 25,  117 => 24,  111 => 22,  108 => 21,  100 => 19,  98 => 18,  91 => 17,  84 => 16,  69 => 14,  64 => 13,  62 => 12,  59 => 11,  58 => 10,  55 => 9,  43 => 8,  40 => 7,  39 => 6,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index_body.html", "");
    }
}
