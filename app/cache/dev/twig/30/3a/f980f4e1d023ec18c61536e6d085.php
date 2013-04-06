<?php

/* WixairReparacionesBundle:Reparacion:show.html.twig */
class __TwigTemplate_303af980f4e1d023ec18c61536e6d085 extends Twig_Template
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
        echo "<table class=\"record_properties\">
    <tbody>
        <tr>
            <td>Wixair</td>
            <td>Registro: <span style='border:1px solid black'>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</span></td>
        </tr>
        <tr><td colspan=\"2\" style=\"text-align:center;\">C/ Samuel Liébana Nose qué</td></tr>
        <tr>
            <th>Fecha_entrada</th>
            <th>Fecha_salida</th>
        </tr>
        <tr>
            <td style='border:1px solid black'>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechaentrada"), "d-m-Y"), "html", null, true);
        echo "</td>
            <td style='border:1px solid black'>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fechasalida"), "d-m-Y"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre</th>
        </tr>
        <tr>
            <td colspan=\"2\" style='border:1px solid black'>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tlf</th>
            <th>Equipo</th>
        </tr>
        <tr>
            <td style='border:1px solid black'>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tlf"), "html", null, true);
        echo "</td>
            <td style='border:1px solid black'>
                ";
        // line 29
        if (($this->getAttribute($this->getContext($context, "entity"), "tipoequipo") == 1)) {
            // line 30
            echo "                    <u>Portatil</u> / Sobremesa
                ";
        } elseif (($this->getAttribute($this->getContext($context, "entity"), "tipoequipo") == 2)) {
            // line 32
            echo "                    Portatil / <u>Sobremesa</u>
                ";
        } else {
            // line 34
            echo "                    Portatil / Sobremesa
                ";
        }
        // line 36
        echo "            </td>
        </tr>
        <tr>
            <th>Numero_serie</th>
        </tr>
        <tr>
            <td colspan=\"2\" style='border:1px solid black'>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "numeroserie"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Accesorios</th>
        </tr>
        <tr>
            <td colspan=\"2\" style='border:1px solid black'>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "accesorios"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Averia</th>
        </tr>
        <tr>
            <td colspan=\"2\" style='border:1px solid black'>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "averia"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Reparacion</th>
        </tr>
        <tr>
            <td colspan=\"2\" style='border:1px solid black'>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "reparacion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Precio</th>
            <th>Presupuesto_aceptado</th>
        </tr>
        <tr>
            <td style='border:1px solid black'>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "precio"), "html", null, true);
        echo "</td>
            <td style='border:1px solid black'>
                ";
        // line 69
        if (($this->getAttribute($this->getContext($context, "entity"), "presupuestoaceptado") == true)) {
            // line 70
            echo "                    <u>Sí</u> / No
                ";
        } elseif (($this->getAttribute($this->getContext($context, "entity"), "presupuestoaceptado") == false)) {
            // line 72
            echo "                    Sí / <u>No</u>
                ";
        } else {
            // line 74
            echo "                    Sí / No
                ";
        }
        // line 75
        echo "            
            </td>
        </tr>
        <tr>
            <td></td>
            <td style=\"border:1px solid black;height:70px;\"></td>
        </tr>
        <tr>
            <th>Observaciones</th>
        </tr>
        <tr>
            <td colspan=\"2\" style='border:1px solid black'>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "observaciones"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "WixairReparacionesBundle:Reparacion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 86,  142 => 75,  138 => 74,  134 => 72,  130 => 70,  128 => 69,  123 => 67,  113 => 60,  104 => 54,  95 => 48,  86 => 42,  78 => 36,  74 => 34,  70 => 32,  66 => 30,  64 => 29,  59 => 27,  49 => 20,  40 => 14,  36 => 13,  25 => 5,  19 => 1,);
    }
}
