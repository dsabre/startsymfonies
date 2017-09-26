<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_24a37b672924dc81e8ec3deaa819ff63d6098425765879650caa073f54a28a3a extends Twig_Template
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
        $__internal_69c064b5950b0171a53e584a98a205929e3d494e310a5720ae642797c4edbd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c064b5950b0171a53e584a98a205929e3d494e310a5720ae642797c4edbd14->enter($__internal_69c064b5950b0171a53e584a98a205929e3d494e310a5720ae642797c4edbd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e716e7903bc02161e404d31094bb17cbee5b2f02fac4dd3ce4e34a671cc81fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e716e7903bc02161e404d31094bb17cbee5b2f02fac4dd3ce4e34a671cc81fdb->enter($__internal_e716e7903bc02161e404d31094bb17cbee5b2f02fac4dd3ce4e34a671cc81fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_69c064b5950b0171a53e584a98a205929e3d494e310a5720ae642797c4edbd14->leave($__internal_69c064b5950b0171a53e584a98a205929e3d494e310a5720ae642797c4edbd14_prof);

        
        $__internal_e716e7903bc02161e404d31094bb17cbee5b2f02fac4dd3ce4e34a671cc81fdb->leave($__internal_e716e7903bc02161e404d31094bb17cbee5b2f02fac4dd3ce4e34a671cc81fdb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
