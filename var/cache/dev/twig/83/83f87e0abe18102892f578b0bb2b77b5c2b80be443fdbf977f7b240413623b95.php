<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eee7a0a046d946879840e2edaf660efa50524cf141d935c95ab89f9b266af6b4 extends Twig_Template
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
        $__internal_75a538555db127e83ea6a80226cb3875243038492602a648fa5e56f767bfba31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a538555db127e83ea6a80226cb3875243038492602a648fa5e56f767bfba31->enter($__internal_75a538555db127e83ea6a80226cb3875243038492602a648fa5e56f767bfba31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ef5423231ee0479dd025f82ff18bf0c19ebd9073b0891d3555fefbdc4b721cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5423231ee0479dd025f82ff18bf0c19ebd9073b0891d3555fefbdc4b721cc7->enter($__internal_ef5423231ee0479dd025f82ff18bf0c19ebd9073b0891d3555fefbdc4b721cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75a538555db127e83ea6a80226cb3875243038492602a648fa5e56f767bfba31->leave($__internal_75a538555db127e83ea6a80226cb3875243038492602a648fa5e56f767bfba31_prof);

        
        $__internal_ef5423231ee0479dd025f82ff18bf0c19ebd9073b0891d3555fefbdc4b721cc7->leave($__internal_ef5423231ee0479dd025f82ff18bf0c19ebd9073b0891d3555fefbdc4b721cc7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7d5999af47f1f6a24805d56713f18d4daeb4395423a736ac5025a41c7161a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d5999af47f1f6a24805d56713f18d4daeb4395423a736ac5025a41c7161a9a->enter($__internal_b7d5999af47f1f6a24805d56713f18d4daeb4395423a736ac5025a41c7161a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b9cbc14c710fe6224395d7a92678528265b9ffd34f09a3dc2d983a1065938625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cbc14c710fe6224395d7a92678528265b9ffd34f09a3dc2d983a1065938625->enter($__internal_b9cbc14c710fe6224395d7a92678528265b9ffd34f09a3dc2d983a1065938625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b9cbc14c710fe6224395d7a92678528265b9ffd34f09a3dc2d983a1065938625->leave($__internal_b9cbc14c710fe6224395d7a92678528265b9ffd34f09a3dc2d983a1065938625_prof);

        
        $__internal_b7d5999af47f1f6a24805d56713f18d4daeb4395423a736ac5025a41c7161a9a->leave($__internal_b7d5999af47f1f6a24805d56713f18d4daeb4395423a736ac5025a41c7161a9a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_086ec169ef4f43c14403473a07a51b558f14e1e946b7b5cbe8cb7c352fd53bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086ec169ef4f43c14403473a07a51b558f14e1e946b7b5cbe8cb7c352fd53bc8->enter($__internal_086ec169ef4f43c14403473a07a51b558f14e1e946b7b5cbe8cb7c352fd53bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae158084f703b1bb0a462927d54cc6b800da8ae2dd3924bd8687dd3ab4535fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae158084f703b1bb0a462927d54cc6b800da8ae2dd3924bd8687dd3ab4535fe2->enter($__internal_ae158084f703b1bb0a462927d54cc6b800da8ae2dd3924bd8687dd3ab4535fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ae158084f703b1bb0a462927d54cc6b800da8ae2dd3924bd8687dd3ab4535fe2->leave($__internal_ae158084f703b1bb0a462927d54cc6b800da8ae2dd3924bd8687dd3ab4535fe2_prof);

        
        $__internal_086ec169ef4f43c14403473a07a51b558f14e1e946b7b5cbe8cb7c352fd53bc8->leave($__internal_086ec169ef4f43c14403473a07a51b558f14e1e946b7b5cbe8cb7c352fd53bc8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe0ccdf1b7b4e56f4168ca06f4b368f2de303be797f24593724e8183291693cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0ccdf1b7b4e56f4168ca06f4b368f2de303be797f24593724e8183291693cd->enter($__internal_fe0ccdf1b7b4e56f4168ca06f4b368f2de303be797f24593724e8183291693cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3018e42877b4dbbc6bb1ba8a0a8f52f26f0a02f97dd99b9593a48fb7ec2ce35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3018e42877b4dbbc6bb1ba8a0a8f52f26f0a02f97dd99b9593a48fb7ec2ce35->enter($__internal_d3018e42877b4dbbc6bb1ba8a0a8f52f26f0a02f97dd99b9593a48fb7ec2ce35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d3018e42877b4dbbc6bb1ba8a0a8f52f26f0a02f97dd99b9593a48fb7ec2ce35->leave($__internal_d3018e42877b4dbbc6bb1ba8a0a8f52f26f0a02f97dd99b9593a48fb7ec2ce35_prof);

        
        $__internal_fe0ccdf1b7b4e56f4168ca06f4b368f2de303be797f24593724e8183291693cd->leave($__internal_fe0ccdf1b7b4e56f4168ca06f4b368f2de303be797f24593724e8183291693cd_prof);

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
