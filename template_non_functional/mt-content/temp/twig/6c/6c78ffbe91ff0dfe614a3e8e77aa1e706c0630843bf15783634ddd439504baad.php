<?php

/* application/index.html */
class __TwigTemplate_98e4affbe31b4628317ec9cdbb2aefedbe4a9ab1adb169a97f87473d0e232d66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/default.html", "application/index.html", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'custom_js' => array($this, 'block_custom_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/default.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "<div ui-view=\"header\"></div>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("admin.body.top");
        echo "
<div class=\"content-wrapper moto-ui-content view-animate\">
    <div class=\"moto-ui-content-wrapper\" ui-view=\"content\">
    </div>
</div>
";
        // line 13
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("admin.body.bottom");
        echo "
";
    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
        // line 17
        echo "<div ui-view=\"footer\"></div>
";
    }

    // line 20
    public function block_custom_js($context, array $blocks = array())
    {
        // line 21
        echo "<script type=\"text/javascript\" data-cfasync=\"false\">
    var app = app || {};

    app.config = ";
        // line 24
        echo twig_jsonencode_filter(($context["config"] ?? null));
        echo ";
    app.user = ";
        // line 25
        echo twig_jsonencode_filter(($context["user"] ?? null));
        echo ";

    app.config.apiUrl = 'api.php';
    app.config.getPath = function(name) {
        //temp
        if (name[0] !== '@') {
            name = '@' + name;
        }

        return this.getUrl(name);
    };

    app.config.getUrl = function(path, paths, level) {
        level = level || 0;
        if (!path) {
            return path;
        }

        // legacy code for some plugins, @TEMP, @LEGACY
        if ( (path.indexOf('@userAssets/css/font-awesome.min.css') === 0) || (path.indexOf('@userAssets/css/assets.min.css') === 0) ) {
            path = path.replace('@userAssets/', '@systemIncludes/');
        }

        paths = angular.extend({}, this.path, paths || {});

        //compatibility
        if (path[0] !== '@' && path.indexOf('/') === -1) {
            path = '@' + path;
        }

        var url, namespace,
            resourceNameRegExp = new RegExp('^\\\\@([a-zA-z0-9\\_]+)(.*)\$'),
            parse = resourceNameRegExp.exec(path);
        if (path[0] == '@' && parse) {
            namespace = parse[1];
            url = parse[2];
            path = (paths[namespace] ? paths[namespace] : '');
            if (namespace.indexOf('File') == -1 && url.indexOf('?') == -1 && url[0] != '/') {
                if (path.substr(-1) != '/') {
                    path += '/';
                }
            }
            if (url[0] == '/' && path.substr(-1) == '/') {
                url = url.replace(/^([\\/]+)/, '');
            }
            path += url;
            //remove left repeated slash
            path = path.replace(/^([\\/]+)/, '/');
        }

        if (path[0] == '@') {
            path = this.getUrl(path, paths, level + 1);
        }

        return path;
    };

    app.config.getAbsoluteUrl = function(name) {
        return this.getUrl(name, {website: app.config.settings.website.address});
    };

    app.config.getUploadAbsoluteUrl = function(path) {
        return app.config.getUploadUrl(path, {website: app.config.settings.website.address});
    };

    app.config.getUploadUrl = function(path, paths, level) {
        var testRegExp = new RegExp('^([a-z]+:)?\\.?\\/\\/?');
        if (!path || !angular.isString(path) || !path.length) {
            return path;
        }
        if (path[0] !== '@' && !testRegExp.test(path)) {
            path = '@userUploads/' + path;
        }

        return app.config.getUrl(path, paths, level);
    };

    app.config.getRelativeUrl = function(name, paths) {
        return this.getUrl(name, paths);
    };

    app.config.init = function() {
    };

    app.config.init();
</script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@adminApplication/app.min.js", true), "html", null, true);
        echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@adminApplication/lang/en_US.min.js", true), "html", null, true);
        echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
";
        // line 113
        if (($this->getAttribute(($context["user"] ?? null), "language_locale", array()) != "en_US")) {
            // line 114
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl((("@adminApplication/lang/" . $this->getAttribute(($context["user"] ?? null), "language_locale", array())) . ".min.js"), true), "html", null, true);
            echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
";
        }
        // line 116
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->assetJavaScript("@adminApplication/templates.min.js");
        echo "
<script type=\"text/javascript\" data-cfasync=\"false\">
    angular.module('application.plugins', ";
        // line 118
        echo twig_jsonencode_filter($this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("admin.application.plugins", array()));
        echo ");
</script>
";
        // line 120
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("admin.head.top");
        echo "
";
    }

    public function getTemplateName()
    {
        return "application/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 120,  186 => 118,  181 => 116,  175 => 114,  173 => 113,  169 => 112,  165 => 111,  76 => 25,  72 => 24,  67 => 21,  64 => 20,  59 => 17,  56 => 16,  50 => 13,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "application/index.html", "/var/www/html/template/mt-admin/views/application/index.html");
    }
}
