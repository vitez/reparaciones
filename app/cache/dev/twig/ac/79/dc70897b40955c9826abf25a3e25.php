<?php

/* WixairReparacionesBundle:Reparacion:index.html.twig */
class __TwigTemplate_ac79dc70897b40955c9826abf25a3e25 extends Twig_Template
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
        echo "<fieldset id=\"formFilter\">
    <legend>Filtrar listado</legend>
<form method=\"get\" action=\".\" class=\"formFilter\">
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <br clear=\"all\">
    <input type=\"submit\" name=\"submit-filter\" value=\"Filtrar\" />
</form>
<a class=\"button\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reparacion"), "html", null, true);
        echo "\">
            Anular filtro
        </a>
</fieldset>

<table id=\"listaReparaciones\" class=\"records_list\">
    <thead>
        <tr>
            <th>Registro</th>
            <th>Fecha de Entrada</th>
            <th>Fecha de Salida</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Equipo</th>
            <th>N/S</th>
            <th>Precio</th>
            <th>Presupuesto Aceptado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "        <tr>
            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reparacion_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 35
            if ($this->getAttribute($this->getContext($context, "entity"), "fechaentrada")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechaentrada"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 36
            if ($this->getAttribute($this->getContext($context, "entity"), "fechasalida")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechasalida"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tlf"), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 41
            if (($this->getAttribute($this->getContext($context, "entity"), "tipoequipo") == 1)) {
                // line 42
                echo "                    Portatil
                ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "tipoequipo") == 2)) {
                // line 44
                echo "                    Sobremesa
                ";
            }
            // line 46
            echo "            </td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numeroserie"), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "precio"), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            if (($this->getAttribute($this->getContext($context, "entity"), "presupuestoaceptado") == true)) {
                // line 50
                echo "                    Sí
                ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "presupuestoaceptado") == false)) {
                // line 52
                echo "                    No
                ";
            }
            // line 54
            echo "            </td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reparacion_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Ver</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reparacion_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">Editar</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 67
        echo "    </tbody>
</table>

<ul>
    <li>
        <br>
        <a class=\"button\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reparacion_new"), "html", null, true);
        echo "\">
            Nueva reparación
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WixairReparacionesBundle:Reparacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 73,  161 => 67,  149 => 61,  143 => 58,  137 => 54,  133 => 52,  129 => 50,  127 => 49,  123 => 48,  119 => 47,  116 => 46,  112 => 44,  108 => 42,  106 => 41,  101 => 39,  97 => 38,  93 => 37,  87 => 36,  81 => 35,  75 => 34,  72 => 33,  68 => 32,  43 => 10,  36 => 6,  31 => 3,  28 => 2,);
    }
}
