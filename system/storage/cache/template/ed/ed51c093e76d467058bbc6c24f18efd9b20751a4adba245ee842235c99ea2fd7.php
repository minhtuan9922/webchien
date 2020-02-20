<?php

/* marketplace/installer_history.twig */
class __TwigTemplate_2938cfe761b5f3b3d826e4ec6242ed216a78bf1bd4425a2af0c7c0da7616430c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th>";
        // line 5
        echo ($context["column_filename"] ?? null);
        echo "</th>
        <th>";
        // line 6
        echo ($context["column_date_added"] ?? null);
        echo "</th>
        <th class=\"text-right\">";
        // line 7
        echo ($context["column_action"] ?? null);
        echo "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["histories"] ?? null)) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 13
                echo "          <tr>
            <td>";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["history"], "filename", []);
                echo "</td>
            <td>";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", []);
                echo "</td>
            <td class=\"text-right\"><button type=\"button\" value=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["history"], "extension_install_id", []);
                echo "\" data-loading=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_uninstall"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      ";
        } else {
            // line 20
            echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
            // line 21
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        </tr>
      ";
        }
        // line 24
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 28
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 29
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "marketplace/installer_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  93 => 28,  87 => 24,  81 => 21,  78 => 20,  75 => 19,  62 => 16,  58 => 15,  54 => 14,  51 => 13,  46 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "marketplace/installer_history.twig", "");
    }
}
