<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7db6f492e97e61dbf64944fbcecd37bdda859fc6789e5bb4c8a68e9edb70f1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ede8e3557819fec7679fad20c5ae6002b513a879241159bb40582df5c9a46504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede8e3557819fec7679fad20c5ae6002b513a879241159bb40582df5c9a46504->enter($__internal_ede8e3557819fec7679fad20c5ae6002b513a879241159bb40582df5c9a46504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_75677623be19decc8a6378088a8343697e02907733a699e965f50371e85c6a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75677623be19decc8a6378088a8343697e02907733a699e965f50371e85c6a3f->enter($__internal_75677623be19decc8a6378088a8343697e02907733a699e965f50371e85c6a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ede8e3557819fec7679fad20c5ae6002b513a879241159bb40582df5c9a46504->leave($__internal_ede8e3557819fec7679fad20c5ae6002b513a879241159bb40582df5c9a46504_prof);

        
        $__internal_75677623be19decc8a6378088a8343697e02907733a699e965f50371e85c6a3f->leave($__internal_75677623be19decc8a6378088a8343697e02907733a699e965f50371e85c6a3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f33aa282d04a61bedce714397c71d320be29af41f0ce62490c1c46132138ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f33aa282d04a61bedce714397c71d320be29af41f0ce62490c1c46132138ba3->enter($__internal_4f33aa282d04a61bedce714397c71d320be29af41f0ce62490c1c46132138ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50d954640cce723f9a96e6ac1a2bf16de0aeaa0fff9384c9941ffc7302c7c1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d954640cce723f9a96e6ac1a2bf16de0aeaa0fff9384c9941ffc7302c7c1c9->enter($__internal_50d954640cce723f9a96e6ac1a2bf16de0aeaa0fff9384c9941ffc7302c7c1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_50d954640cce723f9a96e6ac1a2bf16de0aeaa0fff9384c9941ffc7302c7c1c9->leave($__internal_50d954640cce723f9a96e6ac1a2bf16de0aeaa0fff9384c9941ffc7302c7c1c9_prof);

        
        $__internal_4f33aa282d04a61bedce714397c71d320be29af41f0ce62490c1c46132138ba3->leave($__internal_4f33aa282d04a61bedce714397c71d320be29af41f0ce62490c1c46132138ba3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4771e46279df687f6822e91ed0957cc17e1f122ce25c018a96f44a7ed2efb555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4771e46279df687f6822e91ed0957cc17e1f122ce25c018a96f44a7ed2efb555->enter($__internal_4771e46279df687f6822e91ed0957cc17e1f122ce25c018a96f44a7ed2efb555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89add32079a54b665c89eb28a40d55b2721c1f2c098b5aaeebe9b45a88a6bcc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89add32079a54b665c89eb28a40d55b2721c1f2c098b5aaeebe9b45a88a6bcc5->enter($__internal_89add32079a54b665c89eb28a40d55b2721c1f2c098b5aaeebe9b45a88a6bcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_89add32079a54b665c89eb28a40d55b2721c1f2c098b5aaeebe9b45a88a6bcc5->leave($__internal_89add32079a54b665c89eb28a40d55b2721c1f2c098b5aaeebe9b45a88a6bcc5_prof);

        
        $__internal_4771e46279df687f6822e91ed0957cc17e1f122ce25c018a96f44a7ed2efb555->leave($__internal_4771e46279df687f6822e91ed0957cc17e1f122ce25c018a96f44a7ed2efb555_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
