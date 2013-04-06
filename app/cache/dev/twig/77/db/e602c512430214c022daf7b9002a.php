<?php

/* WixairReparacionesBundle:Reparacion:new.html.twig */
class __TwigTemplate_77dbe602c512430214c022daf7b9002a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WixairReparacionesBundle::layout.html.twig");

        $this->blocks = array(
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WixairReparacionesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_wrapper($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"formularioGeneral\">
    <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reparacion_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        <p>
            <button type=\"submit\">Crear</button>
        </p>
    </form>
</div>
<ul class=\"record_actions\">
    <li>
        <a class=\"button\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reparacion"), "html", null, true);
        echo "\">
            Volver al listado
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WixairReparacionesBundle:Reparacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  40 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
