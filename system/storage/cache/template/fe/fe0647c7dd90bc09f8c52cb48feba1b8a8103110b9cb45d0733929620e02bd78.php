<?php

/* marketplace/marketplace_comment.twig */
class __TwigTemplate_b28b2441dc2cb1739545eb463f55638b95d9e939592eb966b4eb5bcb4caf0569 extends Twig_Template
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
        if (($context["comments"] ?? null)) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 3
                echo "    <div id=\"comment";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", []);
                echo "\" class=\"media\">
      <img src=\"";
                // line 4
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "image", []);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", []);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", []);
                echo "\" class=\"mr-3 rounded-circle\"/>
      <div class=\"media-body\">
        <h5 class=\"mt-0\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "member", []);
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "date_added", []);
                echo "</h5>
        <p>";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment", []);
                echo "</p>
        <div class=\"reply\">
          <div> ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["comment"], "reply", [])) {
                    // line 10
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "reply", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                        // line 11
                        echo "              <div class=\"media\">
                <img src=\"";
                        // line 12
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "image", []);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", []);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", []);
                        echo "\" class=\"mr-3 rounded-circle\"/>
                <div class=\"media-body\">
                  <h5 class=\"mt-0\">";
                        // line 14
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "member", []);
                        echo " <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "date_added", []);
                        echo "</h5>
                  <p>";
                        // line 15
                        echo twig_get_attribute($this->env, $this->source, $context["reply"], "comment", []);
                        echo "</p>
                </div>
              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["comment"], "next", [])) {
                        // line 20
                        echo "              <div class=\"text-center\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["comment"], "next", []);
                        echo "\" class=\"btn btn-block\">see more replies...</a></div>
            ";
                    }
                    // line 22
                    echo "            ";
                }
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "refresh", []);
                echo "\" class=\"reply-refresh hide\">refresh</a></div>
        </div>
        <p class=\"text-right\">
          <button type=\"button\" class=\"btn btn-link btn-xs\">";
                // line 25
                echo ($context["button_reply"] ?? null);
                echo "</button>
        </p>
        <div class=\"reply-input-box\" style=\"display: none;\">
          <div class=\"media\">
            <div class=\"media-body\">
              <div class=\"form-group\">
                <label for=\"input-comment";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", []);
                echo "\">Leave your comment</label> <textarea name=\"comment\" placeholder=\"Write your comment here...\" id=\"input-comment";
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "extension_comment_id", []);
                echo "\" class=\"form-control\"></textarea>
              </div>
              <div class=\"text-right\"><a href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "add", []);
                echo "\" class=\"btn btn-primary btn-sm\">Comment</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "  <br/>
  <div class=\"text-center\">";
            // line 42
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  138 => 41,  124 => 33,  117 => 31,  108 => 25,  99 => 22,  93 => 20,  90 => 19,  80 => 15,  74 => 14,  65 => 12,  62 => 11,  57 => 10,  55 => 9,  50 => 7,  44 => 6,  35 => 4,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "marketplace/marketplace_comment.twig", "");
    }
}
