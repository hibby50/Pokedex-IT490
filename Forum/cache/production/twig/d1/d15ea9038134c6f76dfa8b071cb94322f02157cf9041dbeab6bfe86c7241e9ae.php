<?php

/* viewforum_forum_tools.html */
class __TwigTemplate_96911f5c77322d57d11c423cd1f402b4cb276fed60efc38edec01434cb42655a extends Twig_Template
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
        if (( !($context["S_IS_BOT"] ?? null) && (($context["U_MARK_FORUMS"] ?? null) || ($context["U_MARK_TOPICS"] ?? null)))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-wrench fa-fw\" aria-hidden=\"true\"></i>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t";
            // line 10
            // line 11
            echo "\t\t\t\t";
            if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 12
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 13
                echo ($context["U_WATCH_FORUM_LINK"] ?? null);
                echo "\" title=\"";
                echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon ";
                if (($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "fa-check-square-o";
                } else {
                    echo "fa-square-o";
                }
                echo " fa-fw\" data-toggle-text=\"";
                echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
                echo "\" data-toggle-url=\"";
                echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<i class=\"icon ";
                // line 14
                if (($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "fa-square-o";
                } else {
                    echo "fa-check-square-o";
                }
                echo " fa-fw\" aria-hidden=\"true\"></i><span>";
                echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())))) {
                // line 19
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 20
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">
\t\t\t\t\t\t\t<i class=\"icon fa-check-square-o fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 21
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t";
            // line 26
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "viewforum_forum_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  86 => 26,  84 => 25,  77 => 21,  73 => 20,  70 => 19,  67 => 18,  54 => 14,  38 => 13,  35 => 12,  32 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewforum_forum_tools.html", "");
    }
}
