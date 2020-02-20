<?php

/* marketplace/marketplace_list.twig */
class __TwigTemplate_8d7359bb007e9273783a113371e405f77ac7327c156d09eb339b1149224c35c5 extends Twig_Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-right\">";
        // line 5
        if ( !($context["error_signature"] ?? null)) {
            // line 6
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_opencart"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fas fa-cog\"></i></button>
        ";
        } else {
            // line 8
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["error_signature"] ?? null);
            echo "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fas fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 9
        echo "</div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", []);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", []);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-puzzle-piece\"></i> ";
        // line 20
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"card bg-light\">
          <div class=\"card-body\">
            <div id=\"extension-filter\" class=\"input-group\">
              <input type=\"text\" name=\"filter_search\" value=\"";
        // line 25
        echo ($context["filter_search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control\"/>
              <div class=\"input-group-append dropdown\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "value", []) == ($context["filter_category"] ?? null))) {
                // line 29
                echo "                    <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\">";
                echo ($context["text_category"] ?? null);
                echo " (";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", []);
                echo ") <i class=\"fas fa-caret-down\"></i></button>
                  ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                <div class=\"dropdown-menu dropdown-menu-right\">
                  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            echo "                    <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", []);
            echo "\" class=\"dropdown-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "text", []);
            echo "</a>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </div>
              </div>
              <div class=\"input-group-append\">
                <button type=\"button\" id=\"button-filter\" data-toggle=\"tooltip\" data-title=\"";
        // line 39
        echo ($context["button_filter"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-filter\"></i></button>
              </div>
            </div>
            <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 42
        echo ($context["filter_category_id"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        echo ($context["filter_download_id"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_rating\" value=\"";
        echo ($context["filter_rating"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_license\" value=\"";
        echo ($context["filter_license"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_partner\" value=\"";
        echo ($context["filter_partner"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"sort\" value=\"";
        echo ($context["sort"] ?? null);
        echo "\" class=\"form-control\"/>
          </div>
        </div>
        <br>
        <div class=\"row mb-4\">
          <div class=\"col-sm-9 col-xs-7\">
            <div class=\"btn-group\">";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["licenses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 49
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["license"], "value", []) == ($context["filter_license"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", []);
                echo "\" class=\"btn btn-light active\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", []);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", []);
                echo "\" class=\"btn btn-light\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", []);
                echo "</a>";
            }
            // line 50
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"col-sm-3 col-xs-5\">
            <div class=\"input-group float-right\">
              <div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"fas fa-sort-amount-down\"></i></span></div>
              <select onchange=\"location = this.value;\" class=\"form-control\">
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 57
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", []) == ($context["sort"] ?? null))) {
                // line 58
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", []);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", []);
                echo "</option>
                  ";
            } else {
                // line 60
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", []);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", []);
                echo "</option>
                  ";
            }
            // line 62
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "              </select>
            </div>
          </div>
        </div>
        <div id=\"extension-list\">
          ";
        // line 68
        if (($context["promotions"] ?? null)) {
            // line 69
            echo "            <h3>Featured</h3>
            <div class=\"row\">
              ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 72
                echo "                ";
                if ($context["extension"]) {
                    // line 73
                    echo "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\"><a href=\"";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", []);
                    echo "\">
                          <div class=\"extension-description\"></div>
                          <img src=\"";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", []);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                    echo "\" class=\"img-fluid\"/></a></div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                    echo "</a></h4>
                        ";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", []);
                    echo "</div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-xs-6\">";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 84
                        echo "                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", []) >= $context["i"])) {
                            echo "<i class=\"fas fa-star\"></i>";
                        } else {
                            echo "<i class=\"far fa-star\"></i>";
                        }
                        // line 85
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                          <div class=\"col-xs-6\">
                            <div class=\"text-right\">";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", []);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 94
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "            </div>
            <hr/>
          ";
        }
        // line 98
        echo "          ";
        if (($context["extensions"] ?? null)) {
            // line 99
            echo "            <div class=\"row\">
              ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 101
                echo "                ";
                if ($context["extension"]) {
                    // line 102
                    echo "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\"><a href=\"";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", []);
                    echo "\">
                          <div class=\"extension-description\"></div>
                          <img src=\"";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", []);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                    echo "\" class=\"img-fluid\"/></a></div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", []);
                    echo "</a></h4>
                        ";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", []);
                    echo "</div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-6\">";
                    // line 112
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 113
                        echo "                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", []) >= $context["i"])) {
                            echo "<i class=\"fas fa-star\"></i>";
                        } else {
                            echo "<i class=\"fas fa-star-o\"></i>";
                        }
                        // line 114
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                          <div class=\"col-6\">
                            <div class=\"text-right\">";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", []);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 123
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
          ";
        } else {
            // line 125
            echo "            <p class=\"text-center\">";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
          ";
        }
        // line 127
        echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">";
        // line 129
        echo ($context["pagination"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
\t\$('#modal-opencart').remove();

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/api&user_token=";
        // line 140
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-opencart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-opencart').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('body').append(html);

\t\t\t\$('#modal-opencart').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
\tvar url = 'index.php?route=marketplace/marketplace&user_token=";
        // line 161
        echo ($context["user_token"] ?? null);
        echo "';

\tvar input = \$('#extension-filter :input');

\tfor (i = 0; i < input.length; i++) {
\t\tif (\$(input[i]).val() != '' && \$(input[i]).val() != null) {
\t\t\turl += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
\t\t}
\t}

\tlocation = url;
});

\$('input[name=\\'filter_search\\']').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\te.preventDefault();

\t\t\$('#button-filter').trigger('click');
\t}
});
//--></script>
";
        // line 182
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 182,  445 => 161,  421 => 140,  407 => 129,  403 => 127,  397 => 125,  388 => 123,  376 => 116,  367 => 114,  360 => 113,  356 => 112,  350 => 109,  344 => 108,  335 => 106,  330 => 104,  326 => 102,  323 => 101,  319 => 100,  316 => 99,  313 => 98,  308 => 95,  302 => 94,  290 => 87,  281 => 85,  274 => 84,  270 => 83,  264 => 80,  258 => 79,  249 => 77,  244 => 75,  240 => 73,  237 => 72,  233 => 71,  229 => 69,  227 => 68,  220 => 63,  214 => 62,  206 => 60,  198 => 58,  195 => 57,  191 => 56,  178 => 50,  163 => 49,  159 => 48,  140 => 42,  134 => 39,  129 => 36,  118 => 34,  114 => 33,  111 => 32,  105 => 31,  97 => 29,  94 => 28,  90 => 27,  83 => 25,  75 => 20,  68 => 15,  57 => 13,  53 => 12,  48 => 10,  45 => 9,  39 => 8,  33 => 6,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "marketplace/marketplace_list.twig", "");
    }
}
