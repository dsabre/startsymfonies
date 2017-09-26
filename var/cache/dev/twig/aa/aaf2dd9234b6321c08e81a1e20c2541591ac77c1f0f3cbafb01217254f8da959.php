<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a1d264c351596849d6761ebfa1b0363bd8a548da0f70fd593f321874c5770a81 extends Twig_Template
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
        $__internal_88df0627d5bd4ec57dc2621a328503074fb85d2ea4f2ea97a163a3c6ff6a80df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88df0627d5bd4ec57dc2621a328503074fb85d2ea4f2ea97a163a3c6ff6a80df->enter($__internal_88df0627d5bd4ec57dc2621a328503074fb85d2ea4f2ea97a163a3c6ff6a80df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d4dbadba35afc5b957b654762ec8f691a74831efbf82b5758cdf4a734207cdeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4dbadba35afc5b957b654762ec8f691a74831efbf82b5758cdf4a734207cdeb->enter($__internal_d4dbadba35afc5b957b654762ec8f691a74831efbf82b5758cdf4a734207cdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_88df0627d5bd4ec57dc2621a328503074fb85d2ea4f2ea97a163a3c6ff6a80df->leave($__internal_88df0627d5bd4ec57dc2621a328503074fb85d2ea4f2ea97a163a3c6ff6a80df_prof);

        
        $__internal_d4dbadba35afc5b957b654762ec8f691a74831efbf82b5758cdf4a734207cdeb->leave($__internal_d4dbadba35afc5b957b654762ec8f691a74831efbf82b5758cdf4a734207cdeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
