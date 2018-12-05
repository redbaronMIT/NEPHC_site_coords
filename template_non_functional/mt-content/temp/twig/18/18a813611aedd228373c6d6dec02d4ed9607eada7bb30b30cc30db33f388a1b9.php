<?php

/* application/guest.html */
class __TwigTemplate_c3f4c3fdd35d0ff11ed98cbb504326989d952e6e95d1c604a5785c8e38db8b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/default.html", "application/guest.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Hello guest!";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("guest.body.top");
        echo "
    <div class=\"content-wrapper moto-ui-content view-animate\">
        <div class=\"moto-ui-content-wrapper\" ui-view=\"content\">
        </div>
    </div>
    ";
        // line 11
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("guest.body.bottom");
        echo "
";
    }

    // line 14
    public function block_custom_js($context, array $blocks = array())
    {
        // line 15
        echo "    <script type=\"text/javascript\" data-cfasync=\"false\">
        var app = app || {};

        app.config = ";
        // line 18
        echo twig_jsonencode_filter(($context["config"] ?? null));
        echo ";
        app.user = null;

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
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@adminApplication/app.guest.min.js", true), "html", null, true);
        echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@adminApplication/lang/en_US.min.js", true), "html", null, true);
        echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
    ";
        // line 107
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "settings", array()), "website", array()), "language_locale", array()) != "en_US")) {
            // line 108
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl((("@adminApplication/lang/" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "settings", array()), "website", array()), "language_locale", array())) . ".min.js"), true), "html", null, true);
            echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
    ";
        }
        // line 110
        echo "    ";
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->assetJavaScript("@adminApplication/templates.min.js");
        echo "
    <script type=\"text/javascript\" data-cfasync=\"false\">
        angular.module('guest.plugins', ";
        // line 112
        echo twig_jsonencode_filter($this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("guest.application.plugins", array()));
        echo ");
    </script>
    ";
        // line 114
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("guest.head.top");
        echo "
";
    }

    public function getTemplateName()
    {
        return "application/guest.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 114,  174 => 112,  168 => 110,  162 => 108,  160 => 107,  156 => 106,  152 => 105,  62 => 18,  57 => 15,  54 => 14,  48 => 11,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "application/guest.html", "/var/www/html/template/mt-admin/views/application/guest.html");
    }
}
