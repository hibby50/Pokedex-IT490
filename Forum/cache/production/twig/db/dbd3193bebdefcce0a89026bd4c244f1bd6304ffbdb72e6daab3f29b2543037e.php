<?php

/* overall_footer.html */
class __TwigTemplate_f8a32848a71d4756340515182fc4eb0565e7773695ffa4db99040fd8b0c9571e extends Twig_Template
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
        echo "\t\t";
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
</div> <!-- wrap -->

<div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
\t";
        // line 9
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 9)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 10
        echo "
\t<div class=\"footerbar\">
\t\t<div class=\"footerbar-container\">

\t\t\t<div class=\"copyright\">
\t\t\t\t";
        // line 15
        // line 16
        echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-copyright\">";
        // line 17
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span>
\t\t\t\t</p>
\t\t\t\t";
        // line 19
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 20
            echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-copyright\">";
            // line 21
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-copyright\">Style <a href=\"http://www.phpbb-fr.com/customise/db/style/proflat/\">proflat</a> &copy; 2017 <a href=\"http://www.phpbb-fr.com/customise/db/author/mazeltof/\">Mazeltof</a></span>
\t\t\t\t</p>
\t\t\t\t";
        // line 27
        // line 28
        echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<a class=\"footer-link\" href=\"";
        // line 29
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<span class=\"footer-link-text\">";
        // line 30
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t|
\t\t\t\t\t<a class=\"footer-link\" href=\"";
        // line 33
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<span class=\"footer-link-text\">";
        // line 34
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_LINK");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</p>
\t\t\t\t";
        // line 37
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 38
            echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-info\">";
            // line 39
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 43
            echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 44
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "</a>
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 47
        echo "\t\t\t</div>
\t\t\t";
        // line 48
        $location = "social_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("social_links.html", "overall_footer.html", 48)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 49
        echo "\t\t</div>
\t</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 52
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 56
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 72
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo "<span class=\"cron\">";
            echo ($context["RUN_CRON_TASK"] ?? null);
            echo "</span>";
        }
        // line 73
        echo "</div>

<script src=\"";
        // line 75
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 76
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 77
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 78
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('2');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 79
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('2');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 80
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 81
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 86
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 93
        echo "
";
        // line 94
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 95
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\t\tif (typeof window.cookieconsent === \"object\") {
\t\t\twindow.addEventListener(\"load\", function(){
\t\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\t\"palette\": {
\t\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\t\"content\": {
\t\t\t\t\t\t\"message\": \"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\t\"dismiss\": \"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\t\"link\": \"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\"href\": \"";
            // line 113
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}
\t</script>
";
        }
        // line 120
        echo "
";
        // line 121
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 122
        echo "
";
        // line 123
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 123)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 124
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", array());
        echo "

";
        // line 126
        // line 127
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 127,  333 => 126,  328 => 124,  314 => 123,  311 => 122,  306 => 121,  303 => 120,  293 => 113,  289 => 112,  285 => 111,  281 => 110,  260 => 95,  258 => 94,  255 => 93,  245 => 86,  238 => 81,  236 => 80,  225 => 79,  214 => 78,  207 => 77,  199 => 76,  195 => 75,  191 => 73,  185 => 72,  164 => 56,  149 => 52,  144 => 49,  132 => 48,  129 => 47,  121 => 44,  118 => 43,  115 => 42,  109 => 39,  106 => 38,  104 => 37,  98 => 34,  92 => 33,  86 => 30,  80 => 29,  77 => 28,  76 => 27,  71 => 24,  65 => 21,  62 => 20,  60 => 19,  55 => 17,  52 => 16,  51 => 15,  44 => 10,  32 => 9,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_footer.html", "");
    }
}
