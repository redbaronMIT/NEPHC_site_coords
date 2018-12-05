<?php

/* @websiteWidgets/grid_gallery/templates/default.twig.html */
class __TwigTemplate_a551fa24ddc19b064d636968414dac1af15b5fe97f064d9b4dbadb8475487d07 extends Twig_Template
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
        // line 1
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", array(), "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-grid-gallery moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "preset", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", array(0 => "classes"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", array(), "method"), "html", null, true);
        echo "\" data-widget=\"grid_gallery\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "preset", array()), "html", null, true);
        echo "\" data-spacing=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "short"), "method"), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "items", array())) > 0)) {
            // line 3
            echo "        <div class=\"moto-widget-grid-gallery-items\" ";
            if ( !($context["isPreview"] ?? null)) {
                echo " data-moto-grid-gallery-options='";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "exportFrontendSettings", array(), "method"), "html", null, true);
                echo "'";
            }
            echo ">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "                <a ";
                if (( !($context["isPreview"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "settings", array()), "enableLightbox", array()))) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "img", array(0 => $this->getAttribute($this->getAttribute($context["item"], "content", array()), "path", array())), "method"), "html", null, true);
                    echo "\"";
                }
                echo " class=\"moto-widget-grid-gallery-item\">
                    <img src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "img", array(0 => $this->getAttribute($this->getAttribute($context["item"], "thumbnail", array()), "path", array())), "method"), "html", null, true);
                echo "\" alt=\"";
                if ($this->getAttribute($this->getAttribute($context["item"], "thumbnail", array()), "alt", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "thumbnail", array()), "alt", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "thumbnail", array()), "name", array()), "html", null, true);
                }
                echo "\" class=\"moto-widget-grid-gallery-image\">
                    ";
                // line 7
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "settings", array()), "showCaptions", array())) {
                    // line 8
                    echo "                        ";
                    if (($this->getAttribute($context["item"], "captionType", array()) == "html")) {
                        // line 9
                        echo "                            <div class=\"caption caption_html moto-widget-text ";
                        if ( !$this->getAttribute($context["item"], "caption", array())) {
                            echo "caption-empty";
                        }
                        echo "\">
                                ";
                        // line 10
                        echo $this->getAttribute($context["item"], "caption", array());
                        echo "
                            </div>
                        ";
                    } else {
                        // line 13
                        echo "                            <div class=\"caption caption_text ";
                        if ( !$this->getAttribute($context["item"], "caption", array())) {
                            echo "caption-empty";
                        }
                        echo "\">
                                <p>";
                        // line 14
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", array()), "html", null, true);
                        echo "</p>
                            </div>
                        ";
                    }
                    // line 17
                    echo "                    ";
                }
                // line 18
                echo "                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    ";
        } else {
            // line 22
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        }
        // line 24
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/grid_gallery/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  115 => 22,  111 => 20,  104 => 18,  101 => 17,  95 => 14,  88 => 13,  82 => 10,  75 => 9,  72 => 8,  70 => 7,  60 => 6,  51 => 5,  47 => 4,  38 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/grid_gallery/templates/default.twig.html", "/var/www/html/template/mt-includes/widgets/grid_gallery/templates/default.twig.html");
    }
}
