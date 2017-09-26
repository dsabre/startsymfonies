<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6210084b57f896b0ee9f8d90a51acc62ba50504a1847f7d5bceca3785bf60921 extends Twig_Template
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
        $__internal_f684f9aa076ab9460956fd7d926bbe708c37ba8876dd639363dbd0c0b06f36f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f684f9aa076ab9460956fd7d926bbe708c37ba8876dd639363dbd0c0b06f36f6->enter($__internal_f684f9aa076ab9460956fd7d926bbe708c37ba8876dd639363dbd0c0b06f36f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d1e6d8d25df1116f24f4e9efa15e30ef67f16499f376a276c5413697adf2a381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e6d8d25df1116f24f4e9efa15e30ef67f16499f376a276c5413697adf2a381->enter($__internal_d1e6d8d25df1116f24f4e9efa15e30ef67f16499f376a276c5413697adf2a381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f684f9aa076ab9460956fd7d926bbe708c37ba8876dd639363dbd0c0b06f36f6->leave($__internal_f684f9aa076ab9460956fd7d926bbe708c37ba8876dd639363dbd0c0b06f36f6_prof);

        
        $__internal_d1e6d8d25df1116f24f4e9efa15e30ef67f16499f376a276c5413697adf2a381->leave($__internal_d1e6d8d25df1116f24f4e9efa15e30ef67f16499f376a276c5413697adf2a381_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_167ca0d12d1fc513eebd25806eacc8d0408a66b6e4f1e33eccd6a0faa7d6fae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_167ca0d12d1fc513eebd25806eacc8d0408a66b6e4f1e33eccd6a0faa7d6fae5->enter($__internal_167ca0d12d1fc513eebd25806eacc8d0408a66b6e4f1e33eccd6a0faa7d6fae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d7800d1a7bdef9ebe29415f6e1dd1c675ca41f4366e69f7f2a542f194966ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7800d1a7bdef9ebe29415f6e1dd1c675ca41f4366e69f7f2a542f194966ee3->enter($__internal_6d7800d1a7bdef9ebe29415f6e1dd1c675ca41f4366e69f7f2a542f194966ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6d7800d1a7bdef9ebe29415f6e1dd1c675ca41f4366e69f7f2a542f194966ee3->leave($__internal_6d7800d1a7bdef9ebe29415f6e1dd1c675ca41f4366e69f7f2a542f194966ee3_prof);

        
        $__internal_167ca0d12d1fc513eebd25806eacc8d0408a66b6e4f1e33eccd6a0faa7d6fae5->leave($__internal_167ca0d12d1fc513eebd25806eacc8d0408a66b6e4f1e33eccd6a0faa7d6fae5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_90092ba217b040c091a76f3f0a265e38e5114a1c347582ec5b28a6e07d7eff23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90092ba217b040c091a76f3f0a265e38e5114a1c347582ec5b28a6e07d7eff23->enter($__internal_90092ba217b040c091a76f3f0a265e38e5114a1c347582ec5b28a6e07d7eff23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a4f88d5ea2d20549158c84d2193364ff99cef6b43270310ab5893be50fc5b991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f88d5ea2d20549158c84d2193364ff99cef6b43270310ab5893be50fc5b991->enter($__internal_a4f88d5ea2d20549158c84d2193364ff99cef6b43270310ab5893be50fc5b991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a4f88d5ea2d20549158c84d2193364ff99cef6b43270310ab5893be50fc5b991->leave($__internal_a4f88d5ea2d20549158c84d2193364ff99cef6b43270310ab5893be50fc5b991_prof);

        
        $__internal_90092ba217b040c091a76f3f0a265e38e5114a1c347582ec5b28a6e07d7eff23->leave($__internal_90092ba217b040c091a76f3f0a265e38e5114a1c347582ec5b28a6e07d7eff23_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_790e119e936f453805c8090229fa76f72ac9dd6f290069d1af14e9635abd777e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790e119e936f453805c8090229fa76f72ac9dd6f290069d1af14e9635abd777e->enter($__internal_790e119e936f453805c8090229fa76f72ac9dd6f290069d1af14e9635abd777e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7774ab3bc2cea74dd6851d1559e9297606f52f702e58201c9bd5a02ae484411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7774ab3bc2cea74dd6851d1559e9297606f52f702e58201c9bd5a02ae484411->enter($__internal_c7774ab3bc2cea74dd6851d1559e9297606f52f702e58201c9bd5a02ae484411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c7774ab3bc2cea74dd6851d1559e9297606f52f702e58201c9bd5a02ae484411->leave($__internal_c7774ab3bc2cea74dd6851d1559e9297606f52f702e58201c9bd5a02ae484411_prof);

        
        $__internal_790e119e936f453805c8090229fa76f72ac9dd6f290069d1af14e9635abd777e->leave($__internal_790e119e936f453805c8090229fa76f72ac9dd6f290069d1af14e9635abd777e_prof);

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
