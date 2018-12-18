<?php

/* navbar_header.html */
class __TwigTemplate_cc20df96c30b26c9c43c73b4da280421b888e353edbd3de944c2b6f72e94d10c extends Twig_Template
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
\t<div class=\"inner\">

\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 5
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 6
        echo "\t\t";
        // line 7
        echo "\t\t<li class=\"breadcrumbs\">
\t\t\t";
        // line 8
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 9
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" itemprop=\"url\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a></span>
\t\t\t";
        }
        // line 11
        echo "\t\t\t";
        // line 12
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" itemprop=\"url\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span>

\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 15
            echo "\t\t\t\t";
            // line 16
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t\t";
            // line 17
            // line 18
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t";
        // line 20
        echo "\t\t</li>
\t\t";
        // line 21
        // line 22
        echo "
\t\t";
        // line 23
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 24
            echo "\t\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 25
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 26
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 30
        echo "
\t\t";
        // line 31
        if (($context["S_INDEX"] ?? null)) {
            // line 32
            echo "\t\t\t";
            if (($context["U_MARK_FORUMS"] ?? null)) {
                // line 33
                echo "\t\t\t\t<li class=\"rightside mark-read\">
\t\t\t\t\t<a href=\"";
                // line 34
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\"  accesskey=\"m\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
                echo "\" data-ajax=\"mark_forums_read\">
\t\t\t\t\t\t<i class=\"icon fp-forum-read fa-fw\"></i><span>";
                // line 35
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 39
            echo "\t\t";
        } elseif (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 40
            echo "\t\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                // line 41
                echo "\t\t\t\t<li class=\"rightside mark-read\">
\t\t\t\t\t<a href=\"";
                // line 42
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
                echo "\" data-ajax=\"mark_forums_read\">
\t\t\t\t\t\t<i class=\"icon fp-forum-read fa-fw\"></i><span>";
                // line 43
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 47
            echo "\t\t";
        }
        // line 48
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 48,  160 => 47,  153 => 43,  147 => 42,  144 => 41,  141 => 40,  138 => 39,  131 => 35,  125 => 34,  122 => 33,  119 => 32,  117 => 31,  114 => 30,  107 => 26,  101 => 25,  98 => 24,  96 => 23,  93 => 22,  92 => 21,  89 => 20,  87 => 19,  81 => 18,  80 => 17,  67 => 16,  65 => 15,  61 => 14,  47 => 12,  45 => 11,  35 => 9,  33 => 8,  30 => 7,  28 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar_header.html", "");
    }
}
