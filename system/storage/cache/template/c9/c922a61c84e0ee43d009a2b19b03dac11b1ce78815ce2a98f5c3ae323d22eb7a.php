<?php

/* default/template/extension/module/category.twig */
class __TwigTemplate_67da3973f2cc91754096f439894f7d7852e27fc6f2be49d349889a97c715e131 extends Twig_Template
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
        echo "<div class=\"list-group mb-3\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", []) == ($context["category_id"] ?? null))) {
                // line 4
                echo "      <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", []);
                echo "\" class=\"list-group-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", []);
                echo "</a>
      ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [])) {
                    // line 6
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 7
                        echo "          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", []) == ($context["child_id"] ?? null))) {
                            // line 8
                            echo "            <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", []);
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", []);
                            echo "</a>
          ";
                        } else {
                            // line 10
                            echo "            <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", []);
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", []);
                            echo "</a>
          ";
                        }
                        // line 12
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "      ";
                }
                // line 14
                echo "    ";
            } else {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", []);
                echo "\" class=\"list-group-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", []);
                echo "</a>
    ";
            }
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  85 => 16,  75 => 14,  72 => 13,  66 => 12,  58 => 10,  50 => 8,  47 => 7,  42 => 6,  40 => 5,  33 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/extension/module/category.twig", "");
    }
}
