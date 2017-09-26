<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a38f80ac789318263153178e8a60d4613ba3c619534a120cb147077e3c00d17c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b4eb36f91d7ee4dbb1bcc14fda92ed3db2e73656a44a1d9f767715f99a3da60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4eb36f91d7ee4dbb1bcc14fda92ed3db2e73656a44a1d9f767715f99a3da60->enter($__internal_3b4eb36f91d7ee4dbb1bcc14fda92ed3db2e73656a44a1d9f767715f99a3da60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8ae33e9b2ea440f7b3ecd27704b0c1a957108f2ef9ad365e4b8080d77618446c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae33e9b2ea440f7b3ecd27704b0c1a957108f2ef9ad365e4b8080d77618446c->enter($__internal_8ae33e9b2ea440f7b3ecd27704b0c1a957108f2ef9ad365e4b8080d77618446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4eb36f91d7ee4dbb1bcc14fda92ed3db2e73656a44a1d9f767715f99a3da60->leave($__internal_3b4eb36f91d7ee4dbb1bcc14fda92ed3db2e73656a44a1d9f767715f99a3da60_prof);

        
        $__internal_8ae33e9b2ea440f7b3ecd27704b0c1a957108f2ef9ad365e4b8080d77618446c->leave($__internal_8ae33e9b2ea440f7b3ecd27704b0c1a957108f2ef9ad365e4b8080d77618446c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f1326cc6e316d8f13744e4fd334460da1918c248bea1ca33c6fad84f1b6a79c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1326cc6e316d8f13744e4fd334460da1918c248bea1ca33c6fad84f1b6a79c->enter($__internal_8f1326cc6e316d8f13744e4fd334460da1918c248bea1ca33c6fad84f1b6a79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e41785510b71b49f76a6781a4cc02d08c5660f5409f67ed1eed296b5ba3e863c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41785510b71b49f76a6781a4cc02d08c5660f5409f67ed1eed296b5ba3e863c->enter($__internal_e41785510b71b49f76a6781a4cc02d08c5660f5409f67ed1eed296b5ba3e863c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e41785510b71b49f76a6781a4cc02d08c5660f5409f67ed1eed296b5ba3e863c->leave($__internal_e41785510b71b49f76a6781a4cc02d08c5660f5409f67ed1eed296b5ba3e863c_prof);

        
        $__internal_8f1326cc6e316d8f13744e4fd334460da1918c248bea1ca33c6fad84f1b6a79c->leave($__internal_8f1326cc6e316d8f13744e4fd334460da1918c248bea1ca33c6fad84f1b6a79c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6be9a19e8db88ace06fa66801f8e97d365f1d8d7a86ea5766a4b59b22fd98c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6be9a19e8db88ace06fa66801f8e97d365f1d8d7a86ea5766a4b59b22fd98c6->enter($__internal_f6be9a19e8db88ace06fa66801f8e97d365f1d8d7a86ea5766a4b59b22fd98c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7aa176aae7d3540868d86d18100a96d56e0ead12d357c5e99d333449f9c8578c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa176aae7d3540868d86d18100a96d56e0ead12d357c5e99d333449f9c8578c->enter($__internal_7aa176aae7d3540868d86d18100a96d56e0ead12d357c5e99d333449f9c8578c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7aa176aae7d3540868d86d18100a96d56e0ead12d357c5e99d333449f9c8578c->leave($__internal_7aa176aae7d3540868d86d18100a96d56e0ead12d357c5e99d333449f9c8578c_prof);

        
        $__internal_f6be9a19e8db88ace06fa66801f8e97d365f1d8d7a86ea5766a4b59b22fd98c6->leave($__internal_f6be9a19e8db88ace06fa66801f8e97d365f1d8d7a86ea5766a4b59b22fd98c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec46b43a2cdbc187684b53bbca906d97971c52ca93a4ca034b20b7da266e3eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec46b43a2cdbc187684b53bbca906d97971c52ca93a4ca034b20b7da266e3eb3->enter($__internal_ec46b43a2cdbc187684b53bbca906d97971c52ca93a4ca034b20b7da266e3eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3a486da6ee4a935bcb60b63377a254d8e2b35b81387b66f5fac4172828beb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a486da6ee4a935bcb60b63377a254d8e2b35b81387b66f5fac4172828beb3a->enter($__internal_d3a486da6ee4a935bcb60b63377a254d8e2b35b81387b66f5fac4172828beb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d3a486da6ee4a935bcb60b63377a254d8e2b35b81387b66f5fac4172828beb3a->leave($__internal_d3a486da6ee4a935bcb60b63377a254d8e2b35b81387b66f5fac4172828beb3a_prof);

        
        $__internal_ec46b43a2cdbc187684b53bbca906d97971c52ca93a4ca034b20b7da266e3eb3->leave($__internal_ec46b43a2cdbc187684b53bbca906d97971c52ca93a4ca034b20b7da266e3eb3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
