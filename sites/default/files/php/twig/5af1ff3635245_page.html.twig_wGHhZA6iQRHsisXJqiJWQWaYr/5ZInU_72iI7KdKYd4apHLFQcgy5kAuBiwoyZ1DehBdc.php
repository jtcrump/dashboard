<?php

/* themes/contrib/breeze/templates/page.html.twig */
class __TwigTemplate_ee9433fa87281fbbf19d774ee4985feb8fd5e6cd72e0befac9630303ec0ae598 extends Twig_Template
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
        $tags = array("if" => 66, "set" => 78);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        echo "<div class=\"layout-container\">
\t<div class=\"container\">
  \t<header role=\"banner\" class=\"section-header\">
  \t\t<div class=\"row\">
\t\t  \t<div class=\"logo col-md-6 col-sm-6 col-xs-12\">
\t\t    \t";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"header-right col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_right", array()), "html", null, true));
        echo "
\t\t\t\t</div>
\t\t\t</div>
  \t</header>
  \t<div class=\"navigation-wrapper\">
\t\t\t<div class=\"navigation\">
\t\t\t\t";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 66
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 67
            echo "\t\t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
\t\t";
        }
        // line 69
        echo "
\t\t";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 71
            echo "  \t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
  \t";
        }
        // line 73
        echo "
\t\t";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 75
            echo "  \t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
  \t";
        }
        // line 77
        echo "
\t\t";
        // line 78
        $context["sidebarClass"] = "col-md-12";
        // line 79
        echo "\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 80
            echo "\t\t\t\t";
            $context["sidebarClass"] = "col-md-8 col-sm-8";
            // line 81
            echo "\t\t\t";
        }
        // line 82
        echo "\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 83
            echo "\t\t\t\t";
            $context["sidebarClass"] = "col-md-8 col-sm-8";
            // line 84
            echo "\t\t\t";
        }
        // line 85
        echo "\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 86
            echo "\t\t\t\t";
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
                // line 87
                echo "\t\t\t  \t";
                $context["sidebarClass"] = "col-md-4 col-sm-4";
                // line 88
                echo "\t\t\t\t";
            }
            // line 89
            echo "\t\t\t";
        }
        // line 90
        echo "
  \t<main role=\"main\">
\t  \t<div class=\"row\">

\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 95
        echo "
\t    \t<div class=\"layout-content ";
        // line 96
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarClass"] ?? null), "html", null, true));
        echo "\">
\t      \t";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
\t    \t</div>";
        // line 99
        echo "
\t    \t";
        // line 100
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 101
            echo "\t      \t<aside class=\"layout-sidebar-first col-md-4 col-sm-4\" role=\"complementary\">
\t        \t";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
\t      \t</aside>
\t    \t";
        }
        // line 105
        echo "
\t    \t";
        // line 106
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 107
            echo "\t      \t<aside class=\"layout-sidebar-second col-md-4 col-sm-4\" role=\"complementary\">
\t        \t";
            // line 108
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
\t      \t</aside>
\t    \t";
        }
        // line 111
        echo "\t\t\t</div>
  \t</main>
\t\t<div class=\"content-bottom row\">
\t\t\t<div class=\"content-bottom-1 col-md-4 col-sm-4\">";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom1", array()), "html", null, true));
        echo "</div>
\t\t\t<div class=\"content-bottom-2 col-md-4 col-sm-4\">";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom2", array()), "html", null, true));
        echo "</div>
\t\t\t<div class=\"content-bottom-3 col-md-4 col-sm-4\">";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom3", array()), "html", null, true));
        echo "</div>
\t\t</div>

\t\t<footer role=\"contentinfo\" class=\"footer\">
\t\t\t<div class=\"section-footer\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 122
        if ($this->getAttribute(($context["page"] ?? null), "footer1", array())) {
            // line 123
            echo "\t\t    \t\t<div class=\"footer_one col-md-4 col-sm-4\">
\t\t      \t\t";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer1", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 127
        echo "\t\t      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer2", array())) {
            // line 128
            echo "\t\t\t\t\t\t<div class=\"footer_second col-md-4 col-sm-4\">
\t\t\t\t\t\t\t";
            // line 129
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer2", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 132
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "footer3", array())) {
            // line 133
            echo "\t\t\t\t\t\t<div class=\"footer_third col-md-4 col-sm-4\">
\t\t\t\t\t\t\t";
            // line 134
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer3", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/breeze/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 137,  236 => 134,  233 => 133,  230 => 132,  224 => 129,  221 => 128,  218 => 127,  212 => 124,  209 => 123,  207 => 122,  198 => 116,  194 => 115,  190 => 114,  185 => 111,  179 => 108,  176 => 107,  174 => 106,  171 => 105,  165 => 102,  162 => 101,  160 => 100,  157 => 99,  153 => 97,  149 => 96,  146 => 95,  140 => 90,  137 => 89,  134 => 88,  131 => 87,  128 => 86,  125 => 85,  122 => 84,  119 => 83,  116 => 82,  113 => 81,  110 => 80,  107 => 79,  105 => 78,  102 => 77,  96 => 75,  94 => 74,  91 => 73,  85 => 71,  83 => 70,  80 => 69,  74 => 67,  72 => 66,  65 => 62,  56 => 56,  50 => 53,  43 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/breeze/templates/page.html.twig", "C:\\Users\\James Crump\\Sites\\devdesktop\\dashboard\\themes\\contrib\\breeze\\templates\\page.html.twig");
    }
}
