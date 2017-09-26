<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3d89c4191ac98f411cc2970513796e0df2d7487183baa7b27441312b77d02ec2 extends Twig_Template
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
        $__internal_1a77c52659b35ea85443e7ef110f9fd64fe64df330edde6daca0dffbf696a3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a77c52659b35ea85443e7ef110f9fd64fe64df330edde6daca0dffbf696a3ea->enter($__internal_1a77c52659b35ea85443e7ef110f9fd64fe64df330edde6daca0dffbf696a3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9ed621112c01050b45b6437667ab02ab1f89834fa08fe0928f92f333684a2c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed621112c01050b45b6437667ab02ab1f89834fa08fe0928f92f333684a2c63->enter($__internal_9ed621112c01050b45b6437667ab02ab1f89834fa08fe0928f92f333684a2c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1a77c52659b35ea85443e7ef110f9fd64fe64df330edde6daca0dffbf696a3ea->leave($__internal_1a77c52659b35ea85443e7ef110f9fd64fe64df330edde6daca0dffbf696a3ea_prof);

        
        $__internal_9ed621112c01050b45b6437667ab02ab1f89834fa08fe0928f92f333684a2c63->leave($__internal_9ed621112c01050b45b6437667ab02ab1f89834fa08fe0928f92f333684a2c63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
