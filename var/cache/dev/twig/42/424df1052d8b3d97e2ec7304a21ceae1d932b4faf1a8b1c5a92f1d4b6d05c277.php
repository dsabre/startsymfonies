<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8adbbb672375a5b9b13f4211de61ea5aba7a844d41552c826a190920e0966e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cc9874cfc6297dca692fc02ec8acc0f629d861709a09f115451368b809a9eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc9874cfc6297dca692fc02ec8acc0f629d861709a09f115451368b809a9eab->enter($__internal_8cc9874cfc6297dca692fc02ec8acc0f629d861709a09f115451368b809a9eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_08dc442da5b8bdb650b4a129345e24e55ff3205cf2890b4d17988d2a542837bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dc442da5b8bdb650b4a129345e24e55ff3205cf2890b4d17988d2a542837bf->enter($__internal_08dc442da5b8bdb650b4a129345e24e55ff3205cf2890b4d17988d2a542837bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8cc9874cfc6297dca692fc02ec8acc0f629d861709a09f115451368b809a9eab->leave($__internal_8cc9874cfc6297dca692fc02ec8acc0f629d861709a09f115451368b809a9eab_prof);

        
        $__internal_08dc442da5b8bdb650b4a129345e24e55ff3205cf2890b4d17988d2a542837bf->leave($__internal_08dc442da5b8bdb650b4a129345e24e55ff3205cf2890b4d17988d2a542837bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
