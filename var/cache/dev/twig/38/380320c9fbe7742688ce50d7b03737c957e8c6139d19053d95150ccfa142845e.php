<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a024dafbc5674a8ba25deb5c4217d1e2ec04411af345cbad092b266948505bbd extends Twig_Template
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
        $__internal_8630e3327e7833b02837876d1c91e409d4ef08e2e430ab2bdc4360d4d592be46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8630e3327e7833b02837876d1c91e409d4ef08e2e430ab2bdc4360d4d592be46->enter($__internal_8630e3327e7833b02837876d1c91e409d4ef08e2e430ab2bdc4360d4d592be46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_331e567981d7739b0471f4034fe4ca36644d4cc0f506b0ae60b5b946e02141b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331e567981d7739b0471f4034fe4ca36644d4cc0f506b0ae60b5b946e02141b6->enter($__internal_331e567981d7739b0471f4034fe4ca36644d4cc0f506b0ae60b5b946e02141b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8630e3327e7833b02837876d1c91e409d4ef08e2e430ab2bdc4360d4d592be46->leave($__internal_8630e3327e7833b02837876d1c91e409d4ef08e2e430ab2bdc4360d4d592be46_prof);

        
        $__internal_331e567981d7739b0471f4034fe4ca36644d4cc0f506b0ae60b5b946e02141b6->leave($__internal_331e567981d7739b0471f4034fe4ca36644d4cc0f506b0ae60b5b946e02141b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
