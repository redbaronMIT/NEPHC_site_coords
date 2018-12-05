<?php

/* @websiteWidgets/menu/templates/default.twig.html */
class __TwigTemplate_0d936c508c372a6e5c57d8edc307496509c8c82fb2263a40a0d9b1fca0a0828d extends Twig_Template
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
        // line 14
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", array(), "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-menu moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "preset", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", array(0 => "classes"), "method"), "html", null, true);
        echo "\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", array()), "preset", array()), "html", null, true);
        echo "\" data-widget=\"menu\"";
        if (($context["isPreview"] ?? null)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "printLoadItemsFlag", array(), "method"), "html", null, true);
        }
        echo ">
    ";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "items", array())) > 0)) {
            // line 16
            echo "        <a href=\"#\" class=\"moto-widget-menu-toggle-btn\"><i class=\"moto-widget-menu-toggle-btn-icon fa fa-bars\"></i></a>
        <ul class=\"moto-widget-menu-list moto-widget-menu-list_horizontal\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentWidget"] ?? null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo $this->getAttribute($this, "MenuItemMacros", array(0 => $context["item"], 1 => 1), "method");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    ";
        } else {
            // line 21
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        }
        // line 23
        echo "</div>";
    }

    // line 1
    public function getSubMenuMacros($__items__ = null, $__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <ul class=\"moto-widget-menu-sublist\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "            ";
                echo $this->getAttribute($this, "MenuItemMacros", array(0 => $context["item"], 1 => ($context["level"] ?? null)), "method");
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getMenuItemMacros($__item__ = null, $__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "<li class=\"moto-widget-menu-item";
            if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "items", array()))) {
                echo " moto-widget-menu-item-has-submenu";
            }
            echo "\">
    <a ";
            // line 9
            if ( !($context["isPreview"] ?? null)) {
                echo $this->getAttribute(($context["item"] ?? null), "getHtmlAttributes", array(), "method");
            }
            echo " class=\"moto-widget-menu-link moto-widget-menu-link-level-";
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "items", array()))) {
                echo " moto-widget-menu-link-submenu";
            }
            if ($this->getAttribute(($context["Linker"] ?? null), "isCurrent", array(0 => $this->getAttribute(($context["item"] ?? null), "action", array()), 1 => $this->getAttribute(($context["item"] ?? null), "properties", array())), "method")) {
                echo " moto-widget-menu-link-active";
            }
            echo " moto-link\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "label", array()), "html", null, true);
            if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "items", array()))) {
                echo "<span class=\"fa moto-widget-menu-link-arrow\"></span>";
            }
            echo "</a>
    ";
            // line 10
            if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "items", array()))) {
                // line 11
                echo "        ";
                echo $this->getAttribute($this, "SubMenuMacros", array(0 => $this->getAttribute(($context["item"] ?? null), "items", array()), 1 => (($context["level"] ?? null) + 1)), "method");
                echo "
    ";
            }
            // line 13
            echo "    </li>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/menu/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 13,  148 => 11,  146 => 10,  127 => 9,  108 => 8,  92 => 6,  83 => 4,  79 => 3,  76 => 2,  63 => 1,  59 => 23,  55 => 21,  51 => 19,  42 => 18,  38 => 16,  36 => 15,  19 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/menu/templates/default.twig.html", "/var/www/html/template/mt-includes/widgets/menu/templates/default.twig.html");
    }
}
