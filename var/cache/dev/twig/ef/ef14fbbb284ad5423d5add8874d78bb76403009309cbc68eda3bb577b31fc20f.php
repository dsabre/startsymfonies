<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5390b84b48348256ff891d4fbe3d59406dc5309f04a6400df6cb7f05609d507f extends Twig_Template
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
        $__internal_fd9c13ae7c342fa8a3674e070cb583ee3b8816743cc247370b44b32d54e0ec89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9c13ae7c342fa8a3674e070cb583ee3b8816743cc247370b44b32d54e0ec89->enter($__internal_fd9c13ae7c342fa8a3674e070cb583ee3b8816743cc247370b44b32d54e0ec89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_204d40ca4b83a81b4c13bb83c234d1d076d1a527f064c62b004657c8370e7f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204d40ca4b83a81b4c13bb83c234d1d076d1a527f064c62b004657c8370e7f10->enter($__internal_204d40ca4b83a81b4c13bb83c234d1d076d1a527f064c62b004657c8370e7f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fd9c13ae7c342fa8a3674e070cb583ee3b8816743cc247370b44b32d54e0ec89->leave($__internal_fd9c13ae7c342fa8a3674e070cb583ee3b8816743cc247370b44b32d54e0ec89_prof);

        
        $__internal_204d40ca4b83a81b4c13bb83c234d1d076d1a527f064c62b004657c8370e7f10->leave($__internal_204d40ca4b83a81b4c13bb83c234d1d076d1a527f064c62b004657c8370e7f10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
