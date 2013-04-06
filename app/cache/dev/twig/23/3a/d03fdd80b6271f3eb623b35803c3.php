<?php

/* WixairReparacionesBundle::layout.html.twig */
class __TwigTemplate_233ad03fdd80b6271f3eb623b35803c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype HMTL>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui/css/ui-lightness/jquery-ui-1.10.2.custom.css"), "html", null, true);
        echo "\">
        <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui/js/jquery-ui-1.10.2.custom.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function(){
                \$(\".datepicker\").datepicker( {dateFormat: 'dd-mm-yy'});
            });
        </script>
    </head>
    <body>
        <header id=\"header\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoP.jpg"), "html", null, true);
        echo "\" />
            <h1>Reparaciones</h1>
        </header>
        <div id=\"wrapper\">
            ";
        // line 21
        $this->displayBlock('wrapper', $context, $blocks);
        // line 22
        echo "        </div>
    </body>
</html>";
    }

    // line 21
    public function block_wrapper($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "WixairReparacionesBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  62 => 22,  60 => 21,  53 => 17,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  25 => 4,  20 => 1,);
    }
}
