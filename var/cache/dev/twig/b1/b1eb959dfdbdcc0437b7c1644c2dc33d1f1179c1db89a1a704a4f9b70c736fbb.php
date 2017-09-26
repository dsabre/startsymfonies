<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_34f5c3177a7dbe50fe322725a58a85c4eb08b6e3060ed7a80d0314893240703d extends Twig_Template
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
        $__internal_cfb2ac03fbcdcafe3d92fb3fc9b78bfa707e66847b1015f2498b93c908819bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb2ac03fbcdcafe3d92fb3fc9b78bfa707e66847b1015f2498b93c908819bd3->enter($__internal_cfb2ac03fbcdcafe3d92fb3fc9b78bfa707e66847b1015f2498b93c908819bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f16d106c1158536e9d5c6804b765c5485f1ec1020da908a7823e66ee3337a520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16d106c1158536e9d5c6804b765c5485f1ec1020da908a7823e66ee3337a520->enter($__internal_f16d106c1158536e9d5c6804b765c5485f1ec1020da908a7823e66ee3337a520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_cfb2ac03fbcdcafe3d92fb3fc9b78bfa707e66847b1015f2498b93c908819bd3->leave($__internal_cfb2ac03fbcdcafe3d92fb3fc9b78bfa707e66847b1015f2498b93c908819bd3_prof);

        
        $__internal_f16d106c1158536e9d5c6804b765c5485f1ec1020da908a7823e66ee3337a520->leave($__internal_f16d106c1158536e9d5c6804b765c5485f1ec1020da908a7823e66ee3337a520_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
