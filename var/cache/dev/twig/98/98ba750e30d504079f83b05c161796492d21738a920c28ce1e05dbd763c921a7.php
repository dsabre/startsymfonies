<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a2db3986fb2a1e436fb6cacff4fa5fc6e0fad0f57c649a09d4f7e25bcf00f313 extends Twig_Template
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
        $__internal_6c12fc7db0f40d5b56afd293b5b64c3a26cf847008635e7043e5975f1d249e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c12fc7db0f40d5b56afd293b5b64c3a26cf847008635e7043e5975f1d249e00->enter($__internal_6c12fc7db0f40d5b56afd293b5b64c3a26cf847008635e7043e5975f1d249e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5ea1f02e4b7ae280baae233a100e1820ce60e6e5b1455e81946529ab2e6cce66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea1f02e4b7ae280baae233a100e1820ce60e6e5b1455e81946529ab2e6cce66->enter($__internal_5ea1f02e4b7ae280baae233a100e1820ce60e6e5b1455e81946529ab2e6cce66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6c12fc7db0f40d5b56afd293b5b64c3a26cf847008635e7043e5975f1d249e00->leave($__internal_6c12fc7db0f40d5b56afd293b5b64c3a26cf847008635e7043e5975f1d249e00_prof);

        
        $__internal_5ea1f02e4b7ae280baae233a100e1820ce60e6e5b1455e81946529ab2e6cce66->leave($__internal_5ea1f02e4b7ae280baae233a100e1820ce60e6e5b1455e81946529ab2e6cce66_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
