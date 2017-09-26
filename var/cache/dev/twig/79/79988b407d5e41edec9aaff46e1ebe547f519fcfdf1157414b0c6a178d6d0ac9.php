<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ae57863d1fe511f26bb53a7c057dc21cc9570263c7097c474aaa6b85973b3dc7 extends Twig_Template
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
        $__internal_8da5ebc7161a0b7c543d1213716da6ce9379a81a8d372dcb7a98bd9f8d3c0e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da5ebc7161a0b7c543d1213716da6ce9379a81a8d372dcb7a98bd9f8d3c0e05->enter($__internal_8da5ebc7161a0b7c543d1213716da6ce9379a81a8d372dcb7a98bd9f8d3c0e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_6c008ba8b0fd4c51e613faf2ba0d803d0dab3e8dad59d51164fcdcd736a42d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c008ba8b0fd4c51e613faf2ba0d803d0dab3e8dad59d51164fcdcd736a42d2d->enter($__internal_6c008ba8b0fd4c51e613faf2ba0d803d0dab3e8dad59d51164fcdcd736a42d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8da5ebc7161a0b7c543d1213716da6ce9379a81a8d372dcb7a98bd9f8d3c0e05->leave($__internal_8da5ebc7161a0b7c543d1213716da6ce9379a81a8d372dcb7a98bd9f8d3c0e05_prof);

        
        $__internal_6c008ba8b0fd4c51e613faf2ba0d803d0dab3e8dad59d51164fcdcd736a42d2d->leave($__internal_6c008ba8b0fd4c51e613faf2ba0d803d0dab3e8dad59d51164fcdcd736a42d2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
