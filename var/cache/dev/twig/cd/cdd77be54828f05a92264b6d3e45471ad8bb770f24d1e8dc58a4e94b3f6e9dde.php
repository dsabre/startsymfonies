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
        $__internal_aa839743d6b528def90ec697df026591f201601b79543e5d95372f1594fc462a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa839743d6b528def90ec697df026591f201601b79543e5d95372f1594fc462a->enter($__internal_aa839743d6b528def90ec697df026591f201601b79543e5d95372f1594fc462a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_55889f64334f28fd09485bb0f939e7cc2efc029ed01625a2784d061e5e665138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55889f64334f28fd09485bb0f939e7cc2efc029ed01625a2784d061e5e665138->enter($__internal_55889f64334f28fd09485bb0f939e7cc2efc029ed01625a2784d061e5e665138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_aa839743d6b528def90ec697df026591f201601b79543e5d95372f1594fc462a->leave($__internal_aa839743d6b528def90ec697df026591f201601b79543e5d95372f1594fc462a_prof);

        
        $__internal_55889f64334f28fd09485bb0f939e7cc2efc029ed01625a2784d061e5e665138->leave($__internal_55889f64334f28fd09485bb0f939e7cc2efc029ed01625a2784d061e5e665138_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2481ba31b79cb695e9da049ae7676b62d361a081e22c334e729d8e377f6148a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2481ba31b79cb695e9da049ae7676b62d361a081e22c334e729d8e377f6148a9->enter($__internal_2481ba31b79cb695e9da049ae7676b62d361a081e22c334e729d8e377f6148a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6b38c9d58c80a3d285ad169118e96d7add17f280406fb40b1b6bfa3eb09c749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b38c9d58c80a3d285ad169118e96d7add17f280406fb40b1b6bfa3eb09c749->enter($__internal_e6b38c9d58c80a3d285ad169118e96d7add17f280406fb40b1b6bfa3eb09c749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e6b38c9d58c80a3d285ad169118e96d7add17f280406fb40b1b6bfa3eb09c749->leave($__internal_e6b38c9d58c80a3d285ad169118e96d7add17f280406fb40b1b6bfa3eb09c749_prof);

        
        $__internal_2481ba31b79cb695e9da049ae7676b62d361a081e22c334e729d8e377f6148a9->leave($__internal_2481ba31b79cb695e9da049ae7676b62d361a081e22c334e729d8e377f6148a9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b01dfa34444177ac18fb2325e980349c12043604934973f447f08e51d8fce850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01dfa34444177ac18fb2325e980349c12043604934973f447f08e51d8fce850->enter($__internal_b01dfa34444177ac18fb2325e980349c12043604934973f447f08e51d8fce850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_362bea055c599a8cd87bb8ca83a3b452a7abcd0ace2288a34c8e49367da8a05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362bea055c599a8cd87bb8ca83a3b452a7abcd0ace2288a34c8e49367da8a05f->enter($__internal_362bea055c599a8cd87bb8ca83a3b452a7abcd0ace2288a34c8e49367da8a05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_362bea055c599a8cd87bb8ca83a3b452a7abcd0ace2288a34c8e49367da8a05f->leave($__internal_362bea055c599a8cd87bb8ca83a3b452a7abcd0ace2288a34c8e49367da8a05f_prof);

        
        $__internal_b01dfa34444177ac18fb2325e980349c12043604934973f447f08e51d8fce850->leave($__internal_b01dfa34444177ac18fb2325e980349c12043604934973f447f08e51d8fce850_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfa7e12b6c84da3a5bbfe75752e775252220861162ee372dbd58f69f0b82fb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa7e12b6c84da3a5bbfe75752e775252220861162ee372dbd58f69f0b82fb39->enter($__internal_cfa7e12b6c84da3a5bbfe75752e775252220861162ee372dbd58f69f0b82fb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b05f91984d6830ab1ce9ae8390858f2d8dd52b43533647892dfda183e2a3e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b05f91984d6830ab1ce9ae8390858f2d8dd52b43533647892dfda183e2a3e36->enter($__internal_2b05f91984d6830ab1ce9ae8390858f2d8dd52b43533647892dfda183e2a3e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b05f91984d6830ab1ce9ae8390858f2d8dd52b43533647892dfda183e2a3e36->leave($__internal_2b05f91984d6830ab1ce9ae8390858f2d8dd52b43533647892dfda183e2a3e36_prof);

        
        $__internal_cfa7e12b6c84da3a5bbfe75752e775252220861162ee372dbd58f69f0b82fb39->leave($__internal_cfa7e12b6c84da3a5bbfe75752e775252220861162ee372dbd58f69f0b82fb39_prof);

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
", "@Twig/layout.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
