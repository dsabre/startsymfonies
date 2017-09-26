<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3223e0f9522de4c37d9c7322f662d6ba3b2a2df77596e5c466ef565c34fcf0fc extends Twig_Template
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
        $__internal_9680352da747d8dda2afa04449037a8dcc200381dd7a3e30a9b7dde96fbb1827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9680352da747d8dda2afa04449037a8dcc200381dd7a3e30a9b7dde96fbb1827->enter($__internal_9680352da747d8dda2afa04449037a8dcc200381dd7a3e30a9b7dde96fbb1827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3b6464a3a08e5e9c255e47663b2220a81a69461d866fe58326a5b234e0f61a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6464a3a08e5e9c255e47663b2220a81a69461d866fe58326a5b234e0f61a73->enter($__internal_3b6464a3a08e5e9c255e47663b2220a81a69461d866fe58326a5b234e0f61a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9680352da747d8dda2afa04449037a8dcc200381dd7a3e30a9b7dde96fbb1827->leave($__internal_9680352da747d8dda2afa04449037a8dcc200381dd7a3e30a9b7dde96fbb1827_prof);

        
        $__internal_3b6464a3a08e5e9c255e47663b2220a81a69461d866fe58326a5b234e0f61a73->leave($__internal_3b6464a3a08e5e9c255e47663b2220a81a69461d866fe58326a5b234e0f61a73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
