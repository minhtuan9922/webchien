<?php

/* default/template/product/category.twig */
class __TwigTemplate_e53eee0018b5aee9a9c9f0eb75075d4792b83fac37a2aacdea28d146e6f6d4c9 extends Twig_Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", []);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", []);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 11
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 12
            echo "        <div class=\"row\">
          ";
            // line 13
            if (($context["thumb"] ?? null)) {
                // line 14
                echo "            <div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\"/></div>
          ";
            }
            // line 16
            echo "          ";
            if (($context["description"] ?? null)) {
                // line 17
                echo "            <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
          ";
            }
            // line 19
            echo "        </div>
        <hr/>
      ";
        }
        // line 22
        echo "      ";
        if (($context["categories"] ?? null)) {
            // line 23
            echo "        <h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
        ";
            // line 24
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 25
                echo "          <div class=\"row\">
            <div class=\"col-sm-3\">
              <ul>
                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 29
                    echo "                  <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", []);
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "              </ul>
            </div>
          </div>
        ";
            } else {
                // line 35
                echo "          <div class=\"row\">
            ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 37
                    echo "              <div class=\"col-sm-3\">
                <ul>
                  ";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 40
                        echo "                    <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", []);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", []);
                        echo "</a></li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                </ul>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </div>
          <br/>
        ";
            }
            // line 48
            echo "      ";
        }
        // line 49
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 50
            echo "        <div id=\"display-control\" class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 53
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fas fa-exchange-alt\"></i> <span class=\"d-inline d-md-none d-lg-inline\">";
            echo ($context["text_compare"] ?? null);
            echo "</span></a>
            </div>
          </div>
          <div class=\"col-md-1 d-none d-md-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"list-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 58
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fas fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 59
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fas fa-th\"></i></button>
            </div>
          </div>
          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <label for=\"input-sort\" class=\"input-group-text\">";
            // line 65
            echo ($context["text_sort"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 69
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", []) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 70
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", []);
                    echo "</option>
                  ";
                } else {
                    // line 72
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", []);
                    echo "</option>
                  ";
                }
                // line 74
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "              </select>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group mb-3\">
              <div class=\"input-group-prepend\">
                <label for=\"input-limit\" class=\"input-group-text\">";
            // line 81
            echo ($context["text_limit"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 85
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", []) == ($context["limit"] ?? null))) {
                    // line 86
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", []);
                    echo "</option>
                  ";
                } else {
                    // line 88
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", []);
                    echo "</option>
                  ";
                }
                // line 90
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "              </select>
            </div>
          </div>
        </div>
        <div class=\"row\">
          ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 97
                echo "            <div class=\"product-layout product-list col-12\">

              <div class=\"product-thumb\">

                <div class=\"image\"><a href=\"";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", []);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", []);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", []);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", []);
                echo "\" class=\"img-fluid\"/></a></div>

                <div>
                  <div class=\"caption\">
                    <h4><a href=\"";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", []);
                echo "</a></h4>
                    <p>";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", []);
                echo "</p>

                    ";
                // line 108
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [])) {
                    // line 109
                    echo "                      <p class=\"price\">
                        ";
                    // line 110
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [])) {
                        // line 111
                        echo "                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", []);
                        echo "
                        ";
                    } else {
                        // line 113
                        echo "                          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", []);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", []);
                        echo "</span> ";
                    }
                    // line 114
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [])) {
                        // line 115
                        echo "                          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", []);
                        echo "</span>
                        ";
                    }
                    // line 117
                    echo "                      </p>
                    ";
                }
                // line 119
                echo "
                    ";
                // line 120
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [])) {
                    // line 121
                    echo "                      <div class=\"rating\">
                        ";
                    // line 122
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 123
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", []) < $context["i"])) {
                            echo " <span class=\"fas fa-stack\"><i class=\"far fa-star fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fas fa-stack\"><i class=\"fas fa-star fa-stack-2x\"></i><i class=\"far fa-star fa-stack-2x\"></i></span>";
                        }
                        // line 124
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "                      </div>
                    ";
                }
                // line 127
                echo "                  </div>
                  <div class=\"button-group\">
                    <button type=\"button\" onclick=\"cart.add('";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", []);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", []);
                echo "');\"><i class=\"fas fa-shopping-cart\"></i> <span class=\"d-none d-lg-inline\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                    <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 130
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", []);
                echo "');\"><i class=\"fas fa-heart\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 131
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", []);
                echo "');\"><i class=\"fas fa-exchange-alt\"></i></button>
                  </div>

                </div>


              </div>

            </div>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 144
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 145
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        }
        // line 148
        echo "
      ";
        // line 149
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 150
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-right\"><a href=\"";
            // line 152
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 155
        echo "
      ";
        // line 156
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 158
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 161
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 161,  460 => 158,  455 => 156,  452 => 155,  444 => 152,  438 => 150,  436 => 149,  433 => 148,  427 => 145,  423 => 144,  419 => 142,  400 => 131,  394 => 130,  386 => 129,  382 => 127,  378 => 125,  372 => 124,  365 => 123,  361 => 122,  358 => 121,  356 => 120,  353 => 119,  349 => 117,  341 => 115,  338 => 114,  331 => 113,  325 => 111,  323 => 110,  320 => 109,  318 => 108,  313 => 106,  307 => 105,  294 => 101,  288 => 97,  284 => 96,  277 => 91,  271 => 90,  263 => 88,  255 => 86,  252 => 85,  248 => 84,  242 => 81,  234 => 75,  228 => 74,  220 => 72,  212 => 70,  209 => 69,  205 => 68,  199 => 65,  190 => 59,  186 => 58,  176 => 53,  171 => 50,  168 => 49,  165 => 48,  160 => 45,  152 => 42,  141 => 40,  137 => 39,  133 => 37,  129 => 36,  126 => 35,  120 => 31,  109 => 29,  105 => 28,  100 => 25,  98 => 24,  93 => 23,  90 => 22,  85 => 19,  79 => 17,  76 => 16,  66 => 14,  64 => 13,  61 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/product/category.twig", "");
    }
}
