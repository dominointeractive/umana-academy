<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/academy/templates/node/node.html.twig */
class __TwigTemplate_1ed4aba2f74843d76f285b0a9bd0a582defb933281c336c4857c086d6619ebd3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 1, $this->source)))) : (""));
        // line 2
        echo "
";
        // line 4
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "bundle", [], "any", false, false, true, 6), 6, $this->source))), 2 => ((        // line 7
($context["layout"] ?? null)) ? ("grid-full") : ("")), 3 => ((        // line 8
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 9)) ? ("node--promoted") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 10
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 10)) ? ("node--sticky") : ("")), 6 => (( !twig_get_attribute($this->env, $this->source,         // line 11
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 11)) ? ("node--unpublished") : ("")), 7 => ((        // line 12
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 12, $this->source)))) : (""))];
        // line 15
        echo "
";
        // line 16
        $context["id"] = ("node-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 16), 16, $this->source));
        // line 17
        echo "
<article ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), "setAttribute", [0 => "id", 1 => ($context["id"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
  <header class=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 19, $this->source), "html", null, true);
        echo "\">
    ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 20, $this->source), "html", null, true);
        echo "
      ";
        // line 21
        if (($context["label"] ?? null)) {
            // line 22
            echo "      <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ">
        <a href=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 23, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 23, $this->source), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 26
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 26, $this->source), "html", null, true);
        echo "
    ";
        // line 27
        if (($context["display_submitted"] ?? null)) {
            // line 28
            echo "      <div class=\"node__meta\">
        ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 29, $this->source), "html", null, true);
            echo "
        <span";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 30, $this->source), "html", null, true);
            echo ">
          ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            echo " ";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 31, $this->source), "html", null, true);
            $___internal_5736d88c2311873b27d134c5e3c5602626dac624c42b2ba15872ed2bcb43d81b_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_5736d88c2311873b27d134c5e3c5602626dac624c42b2ba15872ed2bcb43d81b_));
            echo ", ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 31, $this->source), "html", null, true);
            echo "
        </span>
        ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 33, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 36
        echo "  </header>
  <div";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => ($context["layout"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo ">
    ";
        // line 39
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 39, $this->source), "comment"), "html", null, true);
        echo "
  </div>
  ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 41)) {
            // line 42
            echo "    <div id=\"comments\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 42, $this->source), "html", null, true);
            echo "\">
      ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 46
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/academy/templates/node/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  144 => 43,  139 => 42,  137 => 41,  131 => 39,  127 => 37,  124 => 36,  118 => 33,  106 => 31,  102 => 30,  98 => 29,  95 => 28,  93 => 27,  88 => 26,  80 => 23,  75 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  56 => 16,  53 => 15,  51 => 12,  50 => 11,  49 => 10,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  44 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/academy/templates/node/node.html.twig", "D:\\workspace\\umana-academy\\drupal\\web\\themes\\custom\\academy\\templates\\node\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 21, "apply" => 31);
        static $filters = array("clean_class" => 1, "escape" => 18, "t" => 31, "spaceless" => 31, "without" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'apply'],
                ['clean_class', 'escape', 't', 'spaceless', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
