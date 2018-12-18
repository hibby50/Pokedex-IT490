<?php

/* navbar_footer.html */
class __TwigTemplate_89f65d5c13da4ee8b8419853b14bb6e86228774d91a66643680a89d1ccc575bc extends Twig_Template
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
<div class=\"navbar-container\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-footer\" class=\"nav-footer linklist\" role=\"menubar\">
\t\t<li class=\"breadcrumbs\">
\t\t\t";
        // line 7
        // line 8
        echo "\t\t\t";
        // line 9
        echo "\t\t</li>
\t\t";
        // line 10
        // line 11
        echo "\t\t<li class=\"rightside\">";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>
\t\t";
        // line 12
        // line 13
        echo "\t\t";
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 14
            echo "\t\t\t<li class=\"rightside\">
\t\t\t\t<a href=\"";
            // line 15
            echo ($context["U_DELETE_COOKIES"] ?? null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-trash fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_COOKIES");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
            // line 19
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 20
                echo "\t\t\t\t<li class=\"rightside\" data-last-responsive=\"true\">
\t\t\t\t\t<a href=\"";
                // line 21
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 22
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 26
            echo "\t\t";
        }
        // line 27
        echo "\t\t";
        // line 28
        echo "\t\t";
        if (($context["U_TEAM"] ?? null)) {
            // line 29
            echo "\t\t\t<li class=\"rightside\" data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 30
            echo ($context["U_TEAM"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 31
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 35
        echo "\t\t";
        // line 36
        echo "\t\t";
        if (($context["U_CONTACT_US"] ?? null)) {
            // line 37
            echo "\t\t\t<li class=\"rightside\" data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 38
            echo ($context["U_CONTACT_US"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-envelope fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 39
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 43
        echo "\t</ul>

\t</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  108 => 39,  104 => 38,  101 => 37,  98 => 36,  96 => 35,  89 => 31,  85 => 30,  82 => 29,  79 => 28,  77 => 27,  74 => 26,  67 => 22,  61 => 21,  58 => 20,  56 => 19,  50 => 16,  46 => 15,  43 => 14,  40 => 13,  39 => 12,  34 => 11,  33 => 10,  30 => 9,  28 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar_footer.html", "");
    }
}
