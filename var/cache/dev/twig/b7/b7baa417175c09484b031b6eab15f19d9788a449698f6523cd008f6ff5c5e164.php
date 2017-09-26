<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a5f4964b8dd2411fb4b93db10fd09e972e9a4fc40c61ab201c92f8f0befe5dec extends Twig_Template
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
        $__internal_0e546d2ec37821441e82f5e0ca5fb507c711db1e8c72cace1bf49f7ed227a24b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e546d2ec37821441e82f5e0ca5fb507c711db1e8c72cace1bf49f7ed227a24b->enter($__internal_0e546d2ec37821441e82f5e0ca5fb507c711db1e8c72cace1bf49f7ed227a24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_80a4fc23addb545106e65c0d2b8ba161363f69229189c3f38fd7d7e4eacb484e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a4fc23addb545106e65c0d2b8ba161363f69229189c3f38fd7d7e4eacb484e->enter($__internal_80a4fc23addb545106e65c0d2b8ba161363f69229189c3f38fd7d7e4eacb484e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0e546d2ec37821441e82f5e0ca5fb507c711db1e8c72cace1bf49f7ed227a24b->leave($__internal_0e546d2ec37821441e82f5e0ca5fb507c711db1e8c72cace1bf49f7ed227a24b_prof);

        
        $__internal_80a4fc23addb545106e65c0d2b8ba161363f69229189c3f38fd7d7e4eacb484e->leave($__internal_80a4fc23addb545106e65c0d2b8ba161363f69229189c3f38fd7d7e4eacb484e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
