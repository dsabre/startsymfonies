<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_168c694f90acb475845bf6a0cad886a4fd2f7c90aa6088bc547f61a99b6031b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c64f42c95fd4a7f71458eafb21def95f30d02d9dd4e1fbe567a3c887b35ba5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64f42c95fd4a7f71458eafb21def95f30d02d9dd4e1fbe567a3c887b35ba5e7->enter($__internal_c64f42c95fd4a7f71458eafb21def95f30d02d9dd4e1fbe567a3c887b35ba5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8d3bb249435ba2018bf403f7674c335079b9f01e252ec7ebb4889f1c0a2f0640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3bb249435ba2018bf403f7674c335079b9f01e252ec7ebb4889f1c0a2f0640->enter($__internal_8d3bb249435ba2018bf403f7674c335079b9f01e252ec7ebb4889f1c0a2f0640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c64f42c95fd4a7f71458eafb21def95f30d02d9dd4e1fbe567a3c887b35ba5e7->leave($__internal_c64f42c95fd4a7f71458eafb21def95f30d02d9dd4e1fbe567a3c887b35ba5e7_prof);

        
        $__internal_8d3bb249435ba2018bf403f7674c335079b9f01e252ec7ebb4889f1c0a2f0640->leave($__internal_8d3bb249435ba2018bf403f7674c335079b9f01e252ec7ebb4889f1c0a2f0640_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f8b5f5492b7643b36b8248a9b530a421b3f6c2496bcc28d78f6b4da6b0066f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8b5f5492b7643b36b8248a9b530a421b3f6c2496bcc28d78f6b4da6b0066f6->enter($__internal_3f8b5f5492b7643b36b8248a9b530a421b3f6c2496bcc28d78f6b4da6b0066f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27630fd85b953d726d7ca86e7ad09f00543f5097e67c5cc33e6c8d1db91f7bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27630fd85b953d726d7ca86e7ad09f00543f5097e67c5cc33e6c8d1db91f7bcc->enter($__internal_27630fd85b953d726d7ca86e7ad09f00543f5097e67c5cc33e6c8d1db91f7bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_27630fd85b953d726d7ca86e7ad09f00543f5097e67c5cc33e6c8d1db91f7bcc->leave($__internal_27630fd85b953d726d7ca86e7ad09f00543f5097e67c5cc33e6c8d1db91f7bcc_prof);

        
        $__internal_3f8b5f5492b7643b36b8248a9b530a421b3f6c2496bcc28d78f6b4da6b0066f6->leave($__internal_3f8b5f5492b7643b36b8248a9b530a421b3f6c2496bcc28d78f6b4da6b0066f6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_46de2502870117bc0cb69e93aa80fff0a1f25e24b7a7fd606e622ed5e551a964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46de2502870117bc0cb69e93aa80fff0a1f25e24b7a7fd606e622ed5e551a964->enter($__internal_46de2502870117bc0cb69e93aa80fff0a1f25e24b7a7fd606e622ed5e551a964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_71ac833843b301bf16a494ecf8350c24a73832ccb647d012bd7828a2c4a5b1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ac833843b301bf16a494ecf8350c24a73832ccb647d012bd7828a2c4a5b1cb->enter($__internal_71ac833843b301bf16a494ecf8350c24a73832ccb647d012bd7828a2c4a5b1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_71ac833843b301bf16a494ecf8350c24a73832ccb647d012bd7828a2c4a5b1cb->leave($__internal_71ac833843b301bf16a494ecf8350c24a73832ccb647d012bd7828a2c4a5b1cb_prof);

        
        $__internal_46de2502870117bc0cb69e93aa80fff0a1f25e24b7a7fd606e622ed5e551a964->leave($__internal_46de2502870117bc0cb69e93aa80fff0a1f25e24b7a7fd606e622ed5e551a964_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7e67825eabca4d27288b3fd4259ca0d0e8a6308b87fef550e00f4c89d9052fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e67825eabca4d27288b3fd4259ca0d0e8a6308b87fef550e00f4c89d9052fe->enter($__internal_b7e67825eabca4d27288b3fd4259ca0d0e8a6308b87fef550e00f4c89d9052fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fb7b09c2bd6bbbbff05a5bf9f7c6e7bc45763b989c0f0115b80936206788a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb7b09c2bd6bbbbff05a5bf9f7c6e7bc45763b989c0f0115b80936206788a67->enter($__internal_6fb7b09c2bd6bbbbff05a5bf9f7c6e7bc45763b989c0f0115b80936206788a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6fb7b09c2bd6bbbbff05a5bf9f7c6e7bc45763b989c0f0115b80936206788a67->leave($__internal_6fb7b09c2bd6bbbbff05a5bf9f7c6e7bc45763b989c0f0115b80936206788a67_prof);

        
        $__internal_b7e67825eabca4d27288b3fd4259ca0d0e8a6308b87fef550e00f4c89d9052fe->leave($__internal_b7e67825eabca4d27288b3fd4259ca0d0e8a6308b87fef550e00f4c89d9052fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/dsabre/Lavoro/git/startsymfonies2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
