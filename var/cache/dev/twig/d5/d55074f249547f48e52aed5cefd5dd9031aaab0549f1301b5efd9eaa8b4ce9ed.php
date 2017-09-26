<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4c7b4289cb995b3ff6737044ed96bea61bb61f1d03ffc7d47b94b73dc8002b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95b9dff71365ae69110f217c93547cd820d5d3ab7346fca86319cc17a6346745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b9dff71365ae69110f217c93547cd820d5d3ab7346fca86319cc17a6346745->enter($__internal_95b9dff71365ae69110f217c93547cd820d5d3ab7346fca86319cc17a6346745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_223ec685fb0392dde924e9e4dfa743fc675d20665f546be0bcad5d3bedd4537f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223ec685fb0392dde924e9e4dfa743fc675d20665f546be0bcad5d3bedd4537f->enter($__internal_223ec685fb0392dde924e9e4dfa743fc675d20665f546be0bcad5d3bedd4537f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95b9dff71365ae69110f217c93547cd820d5d3ab7346fca86319cc17a6346745->leave($__internal_95b9dff71365ae69110f217c93547cd820d5d3ab7346fca86319cc17a6346745_prof);

        
        $__internal_223ec685fb0392dde924e9e4dfa743fc675d20665f546be0bcad5d3bedd4537f->leave($__internal_223ec685fb0392dde924e9e4dfa743fc675d20665f546be0bcad5d3bedd4537f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73b3192d419deaaf4ac87e95919432633fd4471c613d99a99b5aa35677097334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b3192d419deaaf4ac87e95919432633fd4471c613d99a99b5aa35677097334->enter($__internal_73b3192d419deaaf4ac87e95919432633fd4471c613d99a99b5aa35677097334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_449214983dc24865b1dd954c52d9d7fee58cba0b698f644e4e5bb44e2c1836d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449214983dc24865b1dd954c52d9d7fee58cba0b698f644e4e5bb44e2c1836d1->enter($__internal_449214983dc24865b1dd954c52d9d7fee58cba0b698f644e4e5bb44e2c1836d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_449214983dc24865b1dd954c52d9d7fee58cba0b698f644e4e5bb44e2c1836d1->leave($__internal_449214983dc24865b1dd954c52d9d7fee58cba0b698f644e4e5bb44e2c1836d1_prof);

        
        $__internal_73b3192d419deaaf4ac87e95919432633fd4471c613d99a99b5aa35677097334->leave($__internal_73b3192d419deaaf4ac87e95919432633fd4471c613d99a99b5aa35677097334_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0abee3de421d2ab6ec3ee9ade3aa17bc72053fb04a05e7552009f3ec829c6b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abee3de421d2ab6ec3ee9ade3aa17bc72053fb04a05e7552009f3ec829c6b62->enter($__internal_0abee3de421d2ab6ec3ee9ade3aa17bc72053fb04a05e7552009f3ec829c6b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e973dbe85581afd11a18577b1fb642777e51477b9bdf865bb3ab698f677fed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e973dbe85581afd11a18577b1fb642777e51477b9bdf865bb3ab698f677fed7->enter($__internal_7e973dbe85581afd11a18577b1fb642777e51477b9bdf865bb3ab698f677fed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e973dbe85581afd11a18577b1fb642777e51477b9bdf865bb3ab698f677fed7->leave($__internal_7e973dbe85581afd11a18577b1fb642777e51477b9bdf865bb3ab698f677fed7_prof);

        
        $__internal_0abee3de421d2ab6ec3ee9ade3aa17bc72053fb04a05e7552009f3ec829c6b62->leave($__internal_0abee3de421d2ab6ec3ee9ade3aa17bc72053fb04a05e7552009f3ec829c6b62_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7b079dc3157a1e346172acab51258c9950c59a19c1cdc3c07d79088392e60e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b079dc3157a1e346172acab51258c9950c59a19c1cdc3c07d79088392e60e9->enter($__internal_b7b079dc3157a1e346172acab51258c9950c59a19c1cdc3c07d79088392e60e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30397fa57b186a774f054212642f73255e3ef8585a3f10367e38727be6d3351e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30397fa57b186a774f054212642f73255e3ef8585a3f10367e38727be6d3351e->enter($__internal_30397fa57b186a774f054212642f73255e3ef8585a3f10367e38727be6d3351e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_30397fa57b186a774f054212642f73255e3ef8585a3f10367e38727be6d3351e->leave($__internal_30397fa57b186a774f054212642f73255e3ef8585a3f10367e38727be6d3351e_prof);

        
        $__internal_b7b079dc3157a1e346172acab51258c9950c59a19c1cdc3c07d79088392e60e9->leave($__internal_b7b079dc3157a1e346172acab51258c9950c59a19c1cdc3c07d79088392e60e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
