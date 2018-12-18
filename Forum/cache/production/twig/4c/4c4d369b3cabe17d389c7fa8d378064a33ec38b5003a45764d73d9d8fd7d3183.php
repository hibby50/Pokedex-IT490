<?php

/* confirm_delete_body.html */
class __TwigTemplate_be5ccfbf3a9a55954801a08181e0edb961b6825fd9eb2dfbcb7becf1acdff430 extends Twig_Template
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
        if (($context["S_AJAX_REQUEST"] ?? null)) {
            // line 2
            echo "\t<form action=\"";
            echo ($context["S_CONFIRM_ACTION"] ?? null);
            echo "\" method=\"post\">
\t\t<p>";
            // line 3
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</p>

\t\t";
            // line 5
            if ( !($context["S_SHADOW_TOPICS"] ?? null)) {
                // line 6
                echo "\t\t";
                if ((( !($context["S_SOFTDELETED"] ?? null) && ($context["S_ALLOWED_DELETE"] ?? null)) && ($context["S_ALLOWED_SOFTDELETE"] ?? null))) {
                    // line 7
                    echo "\t\t\t<label>
\t\t\t\t<strong>";
                    // line 8
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>
\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 9
                    echo ($context["S_CHECKED_PERMANENT"] ?? null);
                    echo " />
\t\t\t\t";
                    // line 10
                    if (($context["S_TOPIC_MODE"] ?? null)) {
                        echo ($context["DELETE_TOPIC_PERMANENTLY_EXPLAIN"] ?? null);
                    } else {
                        echo ($context["DELETE_POST_PERMANENTLY_EXPLAIN"] ?? null);
                    }
                    // line 11
                    echo "\t\t\t</label>
\t\t";
                }
                // line 13
                echo "
\t\t<label for=\"delete_reason\">
\t\t\t<strong>";
                // line 15
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_REASON_EXPLAIN");
                echo "</span><br />
\t\t\t<input type=\"text\" name=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" />
\t\t</label>
\t\t";
            }
            // line 19
            echo "
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 21
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>
\t</form>

";
        } else {
            // line 27
            echo "
";
            // line 28
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "confirm_delete_body.html", 28)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 29
            echo "
<form id=\"confirm\" action=\"";
            // line 30
            echo ($context["S_CONFIRM_ACTION"] ?? null);
            echo "\" method=\"post\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<h2 class=\"message-title\">";
            // line 34
            echo ($context["MESSAGE_TITLE"] ?? null);
            echo "</h2>

\t<p>";
            // line 36
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</p>

\t";
            // line 38
            if ( !($context["S_SHADOW_TOPICS"] ?? null)) {
                // line 39
                echo "\t<fieldset class=\"fields1\">
\t\t";
                // line 40
                if ((( !($context["S_SOFTDELETED"] ?? null) && ($context["S_ALLOWED_DELETE"] ?? null)) && ($context["S_ALLOWED_SOFTDELETE"] ?? null))) {
                    // line 41
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"delete_permanent\">";
                    // line 42
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"delete_permanent\">
\t\t\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 45
                    echo ($context["S_CHECKED_PERMANENT"] ?? null);
                    echo " />
\t\t\t\t\t\t";
                    // line 46
                    if (($context["S_TOPIC_MODE"] ?? null)) {
                        echo ($context["DELETE_TOPIC_PERMANENTLY_EXPLAIN"] ?? null);
                    } else {
                        echo ($context["DELETE_POST_PERMANENTLY_EXPLAIN"] ?? null);
                    }
                    // line 47
                    echo "\t\t\t\t\t</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
                }
                // line 51
                echo "
\t\t";
                // line 52
                // line 53
                echo "
\t\t<dl>
\t\t\t<dt><label for=\"delete_reason\">";
                // line 55
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_REASON_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"delete_reason\" id=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" /></dd>
\t\t</dl>
\t</fieldset>
\t";
            }
            // line 60
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 62
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 63
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "\" class=\"button1\" />&nbsp;
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 64
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

\t</div>
</div>
</form>

";
            // line 71
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "confirm_delete_body.html", 71)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "confirm_delete_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 71,  187 => 64,  183 => 63,  179 => 62,  175 => 60,  164 => 55,  160 => 53,  159 => 52,  156 => 51,  150 => 47,  144 => 46,  140 => 45,  133 => 42,  130 => 41,  128 => 40,  125 => 39,  123 => 38,  118 => 36,  113 => 34,  106 => 30,  103 => 29,  91 => 28,  88 => 27,  80 => 22,  76 => 21,  72 => 19,  62 => 15,  58 => 13,  54 => 11,  48 => 10,  44 => 9,  39 => 8,  36 => 7,  33 => 6,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirm_delete_body.html", "");
    }
}
