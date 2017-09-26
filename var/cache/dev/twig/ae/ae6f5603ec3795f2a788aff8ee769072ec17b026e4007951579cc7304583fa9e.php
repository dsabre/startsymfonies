<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_608d077a45db74815e9cfe15a07f61cee5cc96ff34105f8115b0417467fdebad extends Twig_Template
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
        $__internal_cfd6df26d71a10b5b10c4489ddb9dc886819789b9ab197d9290f2c15a9bec98b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd6df26d71a10b5b10c4489ddb9dc886819789b9ab197d9290f2c15a9bec98b->enter($__internal_cfd6df26d71a10b5b10c4489ddb9dc886819789b9ab197d9290f2c15a9bec98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2126b9b47b8fd3f4c22598765b59b2676b55181131670a172e8918d73fb86f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2126b9b47b8fd3f4c22598765b59b2676b55181131670a172e8918d73fb86f04->enter($__internal_2126b9b47b8fd3f4c22598765b59b2676b55181131670a172e8918d73fb86f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cfd6df26d71a10b5b10c4489ddb9dc886819789b9ab197d9290f2c15a9bec98b->leave($__internal_cfd6df26d71a10b5b10c4489ddb9dc886819789b9ab197d9290f2c15a9bec98b_prof);

        
        $__internal_2126b9b47b8fd3f4c22598765b59b2676b55181131670a172e8918d73fb86f04->leave($__internal_2126b9b47b8fd3f4c22598765b59b2676b55181131670a172e8918d73fb86f04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
