<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cacfe9b858f4f8f3e03773284ab7dfdf07cc5ca0c0251c02eb7b206dcd07de56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacfe9b858f4f8f3e03773284ab7dfdf07cc5ca0c0251c02eb7b206dcd07de56->enter($__internal_cacfe9b858f4f8f3e03773284ab7dfdf07cc5ca0c0251c02eb7b206dcd07de56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c0d2451885dd09e657b1d77a14eced32cb7cdf5acbdef80a1488fcd6116ff7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d2451885dd09e657b1d77a14eced32cb7cdf5acbdef80a1488fcd6116ff7bb->enter($__internal_c0d2451885dd09e657b1d77a14eced32cb7cdf5acbdef80a1488fcd6116ff7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cacfe9b858f4f8f3e03773284ab7dfdf07cc5ca0c0251c02eb7b206dcd07de56->leave($__internal_cacfe9b858f4f8f3e03773284ab7dfdf07cc5ca0c0251c02eb7b206dcd07de56_prof);

        
        $__internal_c0d2451885dd09e657b1d77a14eced32cb7cdf5acbdef80a1488fcd6116ff7bb->leave($__internal_c0d2451885dd09e657b1d77a14eced32cb7cdf5acbdef80a1488fcd6116ff7bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a043eb0ecf8fb824e5dab68921fccad98ae161b00b1334077694f5f68efb4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a043eb0ecf8fb824e5dab68921fccad98ae161b00b1334077694f5f68efb4be->enter($__internal_2a043eb0ecf8fb824e5dab68921fccad98ae161b00b1334077694f5f68efb4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a230142116ed8e20f9cdbcb0e2117e08e401f515a3babedc2985b76134098809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a230142116ed8e20f9cdbcb0e2117e08e401f515a3babedc2985b76134098809->enter($__internal_a230142116ed8e20f9cdbcb0e2117e08e401f515a3babedc2985b76134098809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a230142116ed8e20f9cdbcb0e2117e08e401f515a3babedc2985b76134098809->leave($__internal_a230142116ed8e20f9cdbcb0e2117e08e401f515a3babedc2985b76134098809_prof);

        
        $__internal_2a043eb0ecf8fb824e5dab68921fccad98ae161b00b1334077694f5f68efb4be->leave($__internal_2a043eb0ecf8fb824e5dab68921fccad98ae161b00b1334077694f5f68efb4be_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a7c551bf3c8e79b2760052e59722ea00d540dd5ed8642ec624dcaae71fdb8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7c551bf3c8e79b2760052e59722ea00d540dd5ed8642ec624dcaae71fdb8a6->enter($__internal_1a7c551bf3c8e79b2760052e59722ea00d540dd5ed8642ec624dcaae71fdb8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a53f114b542835b7b99a45a76b6bb05af557d4226e52a8d047bd68b359e404e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53f114b542835b7b99a45a76b6bb05af557d4226e52a8d047bd68b359e404e7->enter($__internal_a53f114b542835b7b99a45a76b6bb05af557d4226e52a8d047bd68b359e404e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a53f114b542835b7b99a45a76b6bb05af557d4226e52a8d047bd68b359e404e7->leave($__internal_a53f114b542835b7b99a45a76b6bb05af557d4226e52a8d047bd68b359e404e7_prof);

        
        $__internal_1a7c551bf3c8e79b2760052e59722ea00d540dd5ed8642ec624dcaae71fdb8a6->leave($__internal_1a7c551bf3c8e79b2760052e59722ea00d540dd5ed8642ec624dcaae71fdb8a6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_872feccb6f8c895629b20fea49d5bf6f9dacc26b6245bfa56395289b6bb72eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872feccb6f8c895629b20fea49d5bf6f9dacc26b6245bfa56395289b6bb72eed->enter($__internal_872feccb6f8c895629b20fea49d5bf6f9dacc26b6245bfa56395289b6bb72eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d4ac16d7a9d7d8e1e1f835cd34da64577cd90e0f5461fc4902f004cbea5b52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4ac16d7a9d7d8e1e1f835cd34da64577cd90e0f5461fc4902f004cbea5b52a->enter($__internal_1d4ac16d7a9d7d8e1e1f835cd34da64577cd90e0f5461fc4902f004cbea5b52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1d4ac16d7a9d7d8e1e1f835cd34da64577cd90e0f5461fc4902f004cbea5b52a->leave($__internal_1d4ac16d7a9d7d8e1e1f835cd34da64577cd90e0f5461fc4902f004cbea5b52a_prof);

        
        $__internal_872feccb6f8c895629b20fea49d5bf6f9dacc26b6245bfa56395289b6bb72eed->leave($__internal_872feccb6f8c895629b20fea49d5bf6f9dacc26b6245bfa56395289b6bb72eed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
