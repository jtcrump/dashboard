<?php

/* themes/contrib/omega/omega/templates/page.html.twig */
class __TwigTemplate_06ef0fc67762c0f4e804d442ee05316763cd0bef305fbb982a4f730c5454dfaa extends Twig_Template
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
        $tags = array("if" => 87);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 76
        echo "<div id=\"page-wrapper\" class=\"clearfix\">
  <div id=\"page\" class=\"clearfix ";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_classes"] ?? null), "html", null, true));
        echo "\">

    <header id=\"header-outer-wrapper\" class=\"outer-wrapper clearfix ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["secondary_menu"] ?? null)) ? ("with-secondary-menu") : ("without-secondary-menu"))));
        echo "\" role=\"banner\">
      <div id=\"header-layout\" class=\"";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "header", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        ";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
      </div>
    </header> <!-- /.section, /#header-->
  
    <section id=\"core-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"core-layout\" class=\"";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "core", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        ";
        // line 87
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 88
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        ";
        }
        // line 90
        echo "      </div>
    </section>
    
    ";
        // line 93
        if (((($this->getAttribute(($context["page"] ?? null), "preface_first", array()) || $this->getAttribute(($context["page"] ?? null), "preface_second", array())) || $this->getAttribute(($context["page"] ?? null), "preface_third", array())) || $this->getAttribute(($context["page"] ?? null), "preface_fourth", array()))) {
            // line 94
            echo "    <section id=\"preface-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"preface-layout\" class=\"";
            // line 95
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "preface", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        
        ";
            // line 97
            if ($this->getAttribute(($context["page"] ?? null), "preface_first", array())) {
                // line 98
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_first", array()), "html", null, true));
                echo "
        ";
            }
            // line 100
            echo "        
        ";
            // line 101
            if ($this->getAttribute(($context["page"] ?? null), "preface_second", array())) {
                // line 102
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_second", array()), "html", null, true));
                echo "
        ";
            }
            // line 104
            echo "        
        ";
            // line 105
            if ($this->getAttribute(($context["page"] ?? null), "preface_third", array())) {
                // line 106
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_third", array()), "html", null, true));
                echo "
        ";
            }
            // line 108
            echo "        
        ";
            // line 109
            if ($this->getAttribute(($context["page"] ?? null), "preface_fourth", array())) {
                // line 110
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_fourth", array()), "html", null, true));
                echo "
        ";
            }
            // line 112
            echo "        
      </div><!-- /#preface-layout -->
    </section> <!-- /#preface-wrapper -->
    ";
        }
        // line 116
        echo "
    <section id=\"content-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"main-layout\" class=\"";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "main", array()), "html", null, true));
        echo " inner-wrapper clearfix\">
        
        ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 121
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        ";
        }
        // line 122
        echo "  
    
        ";
        // line 124
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 125
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
        ";
        }
        // line 127
        echo "    
        ";
        // line 128
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 129
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
        ";
        }
        // line 131
        echo "    
      </div><!-- /#main -->
    </section><!-- /#main-outer-wrapper -->
  
    ";
        // line 135
        if (((($this->getAttribute(($context["page"] ?? null), "postscript_first", array()) || $this->getAttribute(($context["page"] ?? null), "postscript_second", array())) || $this->getAttribute(($context["page"] ?? null), "postscript_third", array())) || $this->getAttribute(($context["page"] ?? null), "postscript_fourth", array()))) {
            // line 136
            echo "    <section id=\"postscript-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"postscript-layout\" class=\"";
            // line 137
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "postscript", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        
        ";
            // line 139
            if ($this->getAttribute(($context["page"] ?? null), "postscript_first", array())) {
                // line 140
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_first", array()), "html", null, true));
                echo "
        ";
            }
            // line 142
            echo "        
        ";
            // line 143
            if ($this->getAttribute(($context["page"] ?? null), "postscript_second", array())) {
                // line 144
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_second", array()), "html", null, true));
                echo "
        ";
            }
            // line 146
            echo "        
        ";
            // line 147
            if ($this->getAttribute(($context["page"] ?? null), "postscript_third", array())) {
                // line 148
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_third", array()), "html", null, true));
                echo "
        ";
            }
            // line 150
            echo "        
        ";
            // line 151
            if ($this->getAttribute(($context["page"] ?? null), "postscript_fourth", array())) {
                // line 152
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "postscript_fourth", array()), "html", null, true));
                echo "
        ";
            }
            // line 154
            echo "        
      </div><!-- /#postscript-layout -->
    </section> <!-- /#postscript-outer-wrapper -->
    ";
        }
        // line 158
        echo "    
    ";
        // line 159
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 160
            echo "    <footer id=\"footer-outer-wrapper\" class=\"outer-wrapper clearfix\">
      <div id=\"footer-layout\" role=\"contentinfo\" class=\"";
            // line 161
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["region_classes"] ?? null), "footer", array()), "html", null, true));
            echo " inner-wrapper clearfix\">
        ";
            // line 162
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div> <!-- /#footer -->
    </footer> <!-- /#footer-outer-wrapper -->
    ";
        }
        // line 166
        echo "</div></div> <!-- /#page, /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/omega/omega/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 166,  256 => 162,  252 => 161,  249 => 160,  247 => 159,  244 => 158,  238 => 154,  232 => 152,  230 => 151,  227 => 150,  221 => 148,  219 => 147,  216 => 146,  210 => 144,  208 => 143,  205 => 142,  199 => 140,  197 => 139,  192 => 137,  189 => 136,  187 => 135,  181 => 131,  175 => 129,  173 => 128,  170 => 127,  164 => 125,  162 => 124,  158 => 122,  152 => 121,  150 => 120,  145 => 118,  141 => 116,  135 => 112,  129 => 110,  127 => 109,  124 => 108,  118 => 106,  116 => 105,  113 => 104,  107 => 102,  105 => 101,  102 => 100,  96 => 98,  94 => 97,  89 => 95,  86 => 94,  84 => 93,  79 => 90,  73 => 88,  71 => 87,  67 => 86,  59 => 81,  55 => 80,  51 => 79,  46 => 77,  43 => 76,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/omega/omega/templates/page.html.twig", "C:\\Users\\James Crump\\Sites\\devdesktop\\dashboard\\themes\\contrib\\omega\\omega\\templates\\page.html.twig");
    }
}
