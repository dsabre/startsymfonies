<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4172787ee9b0292af8be48e9ef6f4e1e163ffc9d66aa7785c5e34d0e9e096195 extends Twig_Template
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
        $__internal_af08f01039f610c0a38a41e08a0a4f48bdc748ae6d28b6b9c3179527d2e872e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af08f01039f610c0a38a41e08a0a4f48bdc748ae6d28b6b9c3179527d2e872e3->enter($__internal_af08f01039f610c0a38a41e08a0a4f48bdc748ae6d28b6b9c3179527d2e872e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e05b9ea6e2eba051d37bcaa50813e0e23ea49557e2700047dbfa2b75b63fb7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05b9ea6e2eba051d37bcaa50813e0e23ea49557e2700047dbfa2b75b63fb7ec->enter($__internal_e05b9ea6e2eba051d37bcaa50813e0e23ea49557e2700047dbfa2b75b63fb7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_af08f01039f610c0a38a41e08a0a4f48bdc748ae6d28b6b9c3179527d2e872e3->leave($__internal_af08f01039f610c0a38a41e08a0a4f48bdc748ae6d28b6b9c3179527d2e872e3_prof);

        
        $__internal_e05b9ea6e2eba051d37bcaa50813e0e23ea49557e2700047dbfa2b75b63fb7ec->leave($__internal_e05b9ea6e2eba051d37bcaa50813e0e23ea49557e2700047dbfa2b75b63fb7ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
