<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_090a497550a3d612f9916fc406230fcf0d812ebee7cdbc3338ec3eefb3137a41 extends Twig_Template
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
        $__internal_618edebf207971d12208dd9b491ea45292b22e7711729ecf2ff6d2cc795cd6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618edebf207971d12208dd9b491ea45292b22e7711729ecf2ff6d2cc795cd6f8->enter($__internal_618edebf207971d12208dd9b491ea45292b22e7711729ecf2ff6d2cc795cd6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6fc0cc1f0d39af42b2331635d6a4bb123fa1b1c11b78bea83ac3e21be3ca8851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc0cc1f0d39af42b2331635d6a4bb123fa1b1c11b78bea83ac3e21be3ca8851->enter($__internal_6fc0cc1f0d39af42b2331635d6a4bb123fa1b1c11b78bea83ac3e21be3ca8851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_618edebf207971d12208dd9b491ea45292b22e7711729ecf2ff6d2cc795cd6f8->leave($__internal_618edebf207971d12208dd9b491ea45292b22e7711729ecf2ff6d2cc795cd6f8_prof);

        
        $__internal_6fc0cc1f0d39af42b2331635d6a4bb123fa1b1c11b78bea83ac3e21be3ca8851->leave($__internal_6fc0cc1f0d39af42b2331635d6a4bb123fa1b1c11b78bea83ac3e21be3ca8851_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
