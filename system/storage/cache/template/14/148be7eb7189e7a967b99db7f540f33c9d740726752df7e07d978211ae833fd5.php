<?php

/* default/template/extension/module/banner.twig */
class __TwigTemplate_938b1dc3542ac361bc95730761166b00a879b2816f92050ea8a4bcbf539dcc4a extends Twig_Template
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
        echo "<div class=\"swiper-viewport\">
  <div id=\"banner";
        // line 2
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "        <div class=\"swiper-slide\">
          ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [])) {
                // line 7
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", []);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", []);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", []);
                echo "\" class=\"img-fluid\"/></a>
          ";
            } else {
                // line 9
                echo "            <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", []);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", []);
                echo "\" class=\"img-fluid\"/>
          ";
            }
            // line 11
            echo "        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#banner";
        // line 17
        echo ($context["module"] ?? null);
        echo "').swiper({
\teffect: 'fade',
\tautoplay: 2500,
\tautoplayDisableOnInteraction: false
});
--></script> ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  65 => 13,  58 => 11,  50 => 9,  40 => 7,  38 => 6,  35 => 5,  31 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/extension/module/banner.twig", "");
    }
}
