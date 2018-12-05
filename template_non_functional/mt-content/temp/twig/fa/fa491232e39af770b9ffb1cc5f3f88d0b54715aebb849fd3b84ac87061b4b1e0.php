<?php

/* base.html */
class __TwigTemplate_232df82e394a6b82d12a468f242fdb93236f7da3ec477e08b6e7792600f4ceb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'css' => array($this, 'block_css'),
            'custom_css' => array($this, 'block_custom_css'),
            'js' => array($this, 'block_js'),
            'before_custom_js' => array($this, 'block_before_custom_js'),
            'custom_js' => array($this, 'block_custom_js'),
            'after_custom_js' => array($this, 'block_after_custom_js'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("head.top");
        echo "
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "    ";
        $this->displayBlock('custom_css', $context, $blocks);
        // line 8
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('before_custom_js', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('custom_js', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('after_custom_js', $context, $blocks);
        // line 12
        echo "    ";
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("head.bottom");
        echo "
</head>
<body class=\"";
        // line 14
        if (($context["user"] ?? null)) {
            echo "app";
        } else {
            echo "guest-app";
        }
        echo "\">
    ";
        // line 15
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("body.top");
        echo "
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
    ";
        // line 23
        echo "
    <script type=\"text/javascript\" data-cfasync=\"false\">
        angular.element(window).one('load', function() {
            angular.bootstrap(angular.element('html'), ['";
        // line 26
        if (($context["user"] ?? null)) {
            echo "application";
        } else {
            echo "guest";
        }
        echo "']);
        });
    </script>
    ";
        // line 29
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("body.bottom");
        echo "
</body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
    }

    // line 7
    public function block_custom_css($context, array $blocks = array())
    {
    }

    // line 8
    public function block_js($context, array $blocks = array())
    {
    }

    // line 9
    public function block_before_custom_js($context, array $blocks = array())
    {
    }

    // line 10
    public function block_custom_js($context, array $blocks = array())
    {
    }

    // line 11
    public function block_after_custom_js($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 16,  131 => 11,  126 => 10,  121 => 9,  116 => 8,  111 => 7,  106 => 6,  101 => 5,  94 => 29,  84 => 26,  79 => 23,  76 => 17,  74 => 16,  70 => 15,  62 => 14,  56 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  41 => 7,  38 => 6,  36 => 5,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html", "/var/www/html/template/mt-admin/views/base.html");
    }
}
