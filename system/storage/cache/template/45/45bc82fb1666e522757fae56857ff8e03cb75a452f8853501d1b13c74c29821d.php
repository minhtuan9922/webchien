<?php

/* catalog/information_form.twig */
class __TwigTemplate_72abeee28223df95d5938208a25f78d706950b8b57a3cb848926a27511906a9c extends Twig_Template
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
      <div class=\"float-right\">
        <button type=\"submit\" form=\"form-information\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 22
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 24
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 26
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 35
            echo "                  <li class=\"nav-item\"><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" data-toggle=\"tab\" class=\"nav-link\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 40
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\">
                    <div class=\"form-group row required\">
                      <label for=\"input-title";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"information_description[";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][title]\" value=\"";
            echo (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["information_description"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["information_description"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "title", [])) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"form-control\"/>
                        ";
            // line 45
            if ((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["error_title"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                // line 46
                echo "                          <div class=\"invalid-tooltip\">";
                echo (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["error_title"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 48
            echo "                      </div>
                    </div>
                    <div class=\"form-group row required\">
                      <label for=\"input-description";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"information_description[";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" data-toggle=\"ckeditor\" data-lang=\"";
            echo ($context["ckeditor"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["information_description"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["information_description"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "description", [])) : (""));
            echo "</textarea>
                        ";
            // line 54
            if ((($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["error_description"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                // line 55
                echo "                          <div class=\"invalid-tooltip\">";
                echo (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["error_description"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 57
            echo "                      </div>
                    </div>
                    <div class=\"form-group row required\">
                      <label for=\"input-meta-title";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"information_description[";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["information_description"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["information_description"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "meta_title", [])) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"form-control\"/>
                        ";
            // line 63
            if ((($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["error_meta_title"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                // line 64
                echo "                          <div class=\"invalid-tooltip\">";
                echo (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["error_meta_title"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 66
            echo "                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label for=\"input-meta-description";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"information_description[";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"form-control\">";
            echo (((($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["information_description"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["information_description"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "meta_description", [])) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group row\">
                      <label for=\"input-meta-keyword";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"information_description[";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
            echo "\" class=\"form-control\">";
            echo (((($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["information_description"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["information_description"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null), "meta_keyword", [])) : (""));
            echo "</textarea>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 86
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 90
            echo "                      <label class=\"form-check\">
                        ";
            // line 91
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []), ($context["information_store"] ?? null))) {
                // line 92
                echo "                          <input type=\"checkbox\" name=\"information_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                echo "\" checked=\"checked\" class=\"form-check-input\"/>
                          ";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
                echo "
                        ";
            } else {
                // line 95
                echo "                          <input type=\"checkbox\" name=\"information_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                echo "\" class=\"form-check-input\"/>
                          ";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
                echo "
                        ";
            }
            // line 98
            echo "                      </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 104
        echo ($context["entry_bottom"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                    ";
        // line 107
        if (($context["bottom"] ?? null)) {
            // line 108
            echo "                      <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"bottom\" value=\"1\" checked=\"checked\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"bottom\" value=\"0\"/> ";
            // line 109
            echo ($context["text_no"] ?? null);
            echo "</label>
                    ";
        } else {
            // line 111
            echo "                      <label class=\"btn btn-outline-secondary\"><input type=\"radio\" name=\"bottom\" value=\"1\"/> ";
            echo ($context["text_yes"] ?? null);
            echo "</label>
                      <label class=\"btn btn-outline-secondary active\"><input type=\"radio\" name=\"bottom\" value=\"0\" checked=\"checked\"/> ";
            // line 112
            echo ($context["text_no"] ?? null);
            echo "</label>
                    ";
        }
        // line 114
        echo "                  </div>
                  <small class=\"form-text text-muted\">";
        // line 115
        echo ($context["help_bottom"] ?? null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 119
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 122
        if (($context["status"] ?? null)) {
            // line 123
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 124
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 126
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 127
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 129
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group row\">
                <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 133
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 135
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fas fa-info-circle\"></i> ";
        // line 140
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 145
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 146
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 151
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 152
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
            echo "</td>
                        <td class=\"text-left\">
                          ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 155
                echo "                            <div class=\"input-group\">
                              <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><img src=\"language/";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", []);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", []);
                echo "\"/></span>
                              </div>
                              <input type=\"text\" name=\"information_seo_url[";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", []);
                echo "]\" value=\"";
                if ((($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = ($context["information_seo_url"] ?? null)) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null)) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                    echo (($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 = (($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 = ($context["information_seo_url"] ?? null)) && is_array($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79) || $__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79 instanceof ArrayAccess ? ($__internal_1b6627cccbecc270d890e9c3dd7f6b41e277f9eef79718257925048c26dc6d79[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null)) && is_array($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40) || $__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40 instanceof ArrayAccess ? ($__internal_98440f958a27a294f74051b56287200cf8d4ccac3368b6ba585b36549e500d40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 161
                if ((($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 = (($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d = ($context["error_keyword"] ?? null)) && is_array($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d) || $__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d instanceof ArrayAccess ? ($__internal_8acbbad4b27a786cad00cba65bc04ee7a503f81018370f2b790d4fe79cfeb21d[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null)) && is_array($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1) || $__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1 instanceof ArrayAccess ? ($__internal_7dc3a0a28f55c5f2463e9b46ecafdfeb61e9238ed4d60acf6f7258d1de3c83e1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null)) {
                    // line 162
                    echo "                              <div class=\"invalid-tooltip\">";
                    echo (($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 = (($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c = ($context["error_keyword"] ?? null)) && is_array($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c) || $__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c instanceof ArrayAccess ? ($__internal_c2705d9276f5639c7ab516a5efff892123f6b2bdcf92245c8c3e7a8e7b8e0b4c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null)) && is_array($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0) || $__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0 instanceof ArrayAccess ? ($__internal_fbfc01bf158172b44fe031b3ae2f71c474964929dfcc389cc81ef3f55fcb06f0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [])] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 164
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                  </tbody>
                </table>
              </div>
            </div>
            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 176
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 177
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 182
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 183
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", []);
            echo "</td>
                        <td class=\"text-left\"><select name=\"information_layout[";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", []);
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>
                            ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 187
                echo "                              ";
                if (((($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 = ($context["information_layout"] ?? null)) && is_array($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69) || $__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69 instanceof ArrayAccess ? ($__internal_4450f16bcd6eee436ec803be9cb8dd13e40acb5f3c668ce291f0476abc1a5b69[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null) && ((($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 = ($context["information_layout"] ?? null)) && is_array($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849) || $__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849 instanceof ArrayAccess ? ($__internal_92ed32b8cbedc9f8b5b379c1ef395076f852e6115f19026df86a46e64a8be849[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [])] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [])))) {
                    // line 188
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", []);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", []);
                    echo "</option>
                              ";
                } else {
                    // line 190
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", []);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", []);
                    echo "</option>
                              ";
                }
                // line 192
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-toggle=\\'ckeditor\\']').ckeditor();

\$('#language li:first-child a').tab('show');
//--></script>
";
        // line 211
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/information_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 211,  579 => 196,  571 => 193,  565 => 192,  557 => 190,  549 => 188,  546 => 187,  542 => 186,  537 => 184,  533 => 183,  530 => 182,  526 => 181,  519 => 177,  515 => 176,  504 => 167,  491 => 164,  485 => 162,  483 => 161,  470 => 159,  461 => 157,  457 => 155,  453 => 154,  448 => 152,  445 => 151,  441 => 150,  434 => 146,  430 => 145,  422 => 140,  412 => 135,  407 => 133,  401 => 129,  396 => 127,  391 => 126,  386 => 124,  381 => 123,  379 => 122,  373 => 119,  366 => 115,  363 => 114,  358 => 112,  353 => 111,  348 => 109,  343 => 108,  341 => 107,  335 => 104,  329 => 100,  322 => 98,  317 => 96,  312 => 95,  307 => 93,  302 => 92,  300 => 91,  297 => 90,  293 => 89,  287 => 86,  281 => 82,  264 => 77,  257 => 75,  244 => 71,  237 => 69,  232 => 66,  226 => 64,  224 => 63,  214 => 62,  207 => 60,  202 => 57,  196 => 55,  194 => 54,  182 => 53,  175 => 51,  170 => 48,  164 => 46,  162 => 45,  152 => 44,  145 => 42,  139 => 40,  135 => 39,  131 => 37,  114 => 35,  110 => 34,  102 => 29,  98 => 28,  94 => 27,  90 => 26,  85 => 24,  80 => 22,  77 => 21,  69 => 17,  67 => 16,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalog/information_form.twig", "");
    }
}
