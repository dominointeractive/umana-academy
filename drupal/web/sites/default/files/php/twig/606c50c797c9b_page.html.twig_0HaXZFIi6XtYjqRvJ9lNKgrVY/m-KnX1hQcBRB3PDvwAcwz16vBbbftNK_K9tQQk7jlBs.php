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

/* themes/custom/academy/templates/system/page.html.twig */
class __TwigTemplate_4808e0d36b265d25245f5076c2c164ab0eab69d79c0594a2827ddb8d91c75a6f extends \Twig\Template
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
        echo "<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    ";
        // line 4
        if (($context["corso"] ?? null)) {
            echo " CORSO TRUE ";
        } else {
            echo " CORSO FALSE ";
        }
        // line 5
        echo "
    ";
        // line 6
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 6) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 6)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 6))) {
            // line 7
            echo "      <header id=\"header\" class=\"header site-header\" role=\"banner\">

        ";
            // line 10
            echo "        <div class=\"site-header__fixable fixable\">
          <div class=\"header__left\">
            <button class=\"nav-primary__button\" aria-controls=\"site-header__inner\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
              <span class=\"nav-primary__icon\">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>
          </div>

          ";
            // line 22
            echo "          <div id=\"site-header__inner\" class=\"site-header__inner\">
            <div class=\"container site-header__inner__container\">

              ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "

              ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 27) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 27))) {
                // line 28
                echo "                <div class=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" aria-label=\"";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle Main Menu"));
                echo "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__label\">";
                // line 30
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span>
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-menu-open=\"false\">

                  ";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "

                  ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 39)) {
                    // line 40
                    echo "                    <div class=\"secondary-nav__wrapper\">
                      ";
                    // line 41
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo "
                    </div>
                  ";
                }
                // line 44
                echo "                </div>
              ";
            }
            // line 46
            echo "            </div>
          </div>
        </div>
      </header>
    ";
        }
        // line 51
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <main id=\"content\" class=\"main-content \" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          <p>prima di hero!</p>
          ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
          <p>dopo di hero!</p>
          <div class=\"main-content__container container\">
            ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
            ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
            ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
            ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 63)) {
            // line 64
            echo "              <div class=\"sidebar-grid grid-full\">
                ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
                ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "
              </div>
            ";
        } else {
            // line 69
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 71
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "
          </div>
        </main>
        <div class=\"social-bar\">

        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
        ";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "
      </div>
    </footer>

    <div class=\"overlay\"></div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/academy/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 83,  190 => 82,  175 => 71,  169 => 69,  163 => 66,  159 => 65,  156 => 64,  154 => 63,  150 => 62,  146 => 61,  142 => 60,  136 => 57,  128 => 51,  121 => 46,  117 => 44,  111 => 41,  108 => 40,  106 => 39,  101 => 37,  91 => 30,  87 => 29,  84 => 28,  82 => 27,  77 => 25,  72 => 22,  59 => 10,  55 => 7,  53 => 6,  50 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/academy/templates/system/page.html.twig", "D:\\workspace\\umana-academy\\drupal\\web\\themes\\custom\\academy\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 25, "t" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
