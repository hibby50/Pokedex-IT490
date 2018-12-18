<?php

/* notification_dropdown.html */
class __TwigTemplate_ca6fdae03ab52edfd7913c2af9b39e1223909cbd54afe846b3a0f6de80c68b9c extends Twig_Template
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
        echo "<div id=\"notification_list\" class=\"dropdown dropdown-extended notification_list\">
\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t<div class=\"dropdown-contents\">
\t\t<div class=\"header\">

\t\t\t\t<a href=\"";
        // line 6
        echo ($context["U_NOTIFICATION_SETTINGS"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SETTINGS");
        echo "</a>
\t\t\t\t";
        // line 7
        if (($context["NOTIFICATIONS_COUNT"] ?? null)) {
            // line 8
            echo "\t\t\t\t\t<span id=\"mark_all_notifications\"> &bull; <a href=\"";
            echo ($context["U_MARK_ALL_NOTIFICATIONS"] ?? null);
            echo "\" data-ajax=\"notification.mark_all_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL_READ");
            echo "</a></span>
\t\t\t\t";
        }
        // line 10
        echo "
\t\t</div>

\t\t<ul>
\t\t\t";
        // line 14
        if ( !twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notifications", array()))) {
            // line 15
            echo "\t\t\t\t<li class=\"no_notifications\">
\t\t\t\t\t";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_NOTIFICATIONS");
            echo "
\t\t\t\t</li>
\t\t\t";
        }
        // line 19
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "notifications", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 20
            echo "\t\t\t\t<li class=\"";
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                echo " bg2";
            }
            if ($this->getAttribute($context["notifications"], "STYLING", array())) {
                echo " ";
                echo $this->getAttribute($context["notifications"], "STYLING", array());
            }
            if ( !$this->getAttribute($context["notifications"], "URL", array())) {
                echo " no-url";
            }
            echo "\">
\t\t\t\t\t";
            // line 21
            if ($this->getAttribute($context["notifications"], "URL", array())) {
                // line 22
                echo "\t\t\t\t\t\t<a class=\"notification-block\" href=\"";
                if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                    echo $this->getAttribute($context["notifications"], "U_MARK_READ", array());
                    echo "\" data-real-url=\"";
                    echo $this->getAttribute($context["notifications"], "URL", array());
                } else {
                    echo $this->getAttribute($context["notifications"], "URL", array());
                }
                echo "\">
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "AVATAR", array())) {
                echo $this->getAttribute($context["notifications"], "AVATAR", array());
            } else {
                echo "<i class=\"icon fa-fw fa-user\"></i>";
            }
            // line 25
            echo "\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 26
            echo $this->getAttribute($context["notifications"], "FORMATTED_TITLE", array());
            echo "</p>
\t\t\t\t\t\t\t";
            // line 27
            if ($this->getAttribute($context["notifications"], "REFERENCE", array())) {
                echo "<p class=\"notification-reference\">";
                echo $this->getAttribute($context["notifications"], "REFERENCE", array());
                echo "</p>";
            }
            // line 28
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "FORUM", array())) {
                echo "<p class=\"notification-forum\">";
                echo $this->getAttribute($context["notifications"], "FORUM", array());
                echo "</p>";
            }
            // line 29
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "REASON", array())) {
                echo "<p class=\"notification-reason\">";
                echo $this->getAttribute($context["notifications"], "REASON", array());
                echo "</p>";
            }
            // line 30
            echo "\t\t\t\t\t\t\t<p class=\"notification-time\">";
            echo $this->getAttribute($context["notifications"], "TIME", array());
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 32
            if ($this->getAttribute($context["notifications"], "URL", array())) {
                echo "</a>";
            }
            // line 33
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                // line 34
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["notifications"], "U_MARK_READ", array());
                echo "\" class=\"mark_read icon-mark\" data-ajax=\"notification.mark_read\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                echo "\">
\t\t\t\t\t\t\t <i class=\"icon fa-check-circle icon-xl fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 35
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t</ul>

\t\t<div class=\"footer\">
\t\t\t<a href=\"";
        // line 43
        echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
        echo "\"><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEE_ALL");
        echo "</span></a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 43,  159 => 40,  152 => 38,  146 => 35,  139 => 34,  136 => 33,  132 => 32,  126 => 30,  119 => 29,  112 => 28,  106 => 27,  102 => 26,  99 => 25,  92 => 24,  80 => 22,  78 => 21,  64 => 20,  59 => 19,  53 => 16,  50 => 15,  48 => 14,  42 => 10,  34 => 8,  32 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "notification_dropdown.html", "");
    }
}
