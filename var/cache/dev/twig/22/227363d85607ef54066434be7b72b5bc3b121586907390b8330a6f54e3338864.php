<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_91aed4adf6a951bc483dd424056c191baf3e416cacbba8e82613c7d2704f25ba extends Twig_Template
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
        $__internal_b775299101618311d0b277b2dfdd8aab507eaf10c752608b7cb416d656e82882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b775299101618311d0b277b2dfdd8aab507eaf10c752608b7cb416d656e82882->enter($__internal_b775299101618311d0b277b2dfdd8aab507eaf10c752608b7cb416d656e82882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e12a84b8583ae4a075c434fb43b6fed445e368720725ddee0db30fbe4a113b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12a84b8583ae4a075c434fb43b6fed445e368720725ddee0db30fbe4a113b2a->enter($__internal_e12a84b8583ae4a075c434fb43b6fed445e368720725ddee0db30fbe4a113b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b775299101618311d0b277b2dfdd8aab507eaf10c752608b7cb416d656e82882->leave($__internal_b775299101618311d0b277b2dfdd8aab507eaf10c752608b7cb416d656e82882_prof);

        
        $__internal_e12a84b8583ae4a075c434fb43b6fed445e368720725ddee0db30fbe4a113b2a->leave($__internal_e12a84b8583ae4a075c434fb43b6fed445e368720725ddee0db30fbe4a113b2a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
