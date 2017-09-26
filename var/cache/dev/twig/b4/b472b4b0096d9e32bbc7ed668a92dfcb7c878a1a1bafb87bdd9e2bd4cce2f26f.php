<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c575f7fb2255663e23e6e1816d182c5971957fe224247c11a41924491fc0fc66 extends Twig_Template
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
        $__internal_186daba733b863a01bf4173082b1461e2fe4817bff0d7f86083b8c52fcc2a11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186daba733b863a01bf4173082b1461e2fe4817bff0d7f86083b8c52fcc2a11b->enter($__internal_186daba733b863a01bf4173082b1461e2fe4817bff0d7f86083b8c52fcc2a11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_54b4b93211f2d9f10bb8008af7c66a8c106d72d16434a490dba1598aa96b8d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b4b93211f2d9f10bb8008af7c66a8c106d72d16434a490dba1598aa96b8d90->enter($__internal_54b4b93211f2d9f10bb8008af7c66a8c106d72d16434a490dba1598aa96b8d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_186daba733b863a01bf4173082b1461e2fe4817bff0d7f86083b8c52fcc2a11b->leave($__internal_186daba733b863a01bf4173082b1461e2fe4817bff0d7f86083b8c52fcc2a11b_prof);

        
        $__internal_54b4b93211f2d9f10bb8008af7c66a8c106d72d16434a490dba1598aa96b8d90->leave($__internal_54b4b93211f2d9f10bb8008af7c66a8c106d72d16434a490dba1598aa96b8d90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
