<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37954d791f212663cc8c9eb709d239e704c996105fc02b8db6cc8f4336933274 extends Twig_Template
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
        $__internal_00ae76b383878787d669e9b58888ef9560c5f8523f895100954713502380fb1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ae76b383878787d669e9b58888ef9560c5f8523f895100954713502380fb1d->enter($__internal_00ae76b383878787d669e9b58888ef9560c5f8523f895100954713502380fb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c50ad820667a9b4d688d7498f4ac2e04aacd2fcb8eac155c5c57ff4797baa3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50ad820667a9b4d688d7498f4ac2e04aacd2fcb8eac155c5c57ff4797baa3bd->enter($__internal_c50ad820667a9b4d688d7498f4ac2e04aacd2fcb8eac155c5c57ff4797baa3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_00ae76b383878787d669e9b58888ef9560c5f8523f895100954713502380fb1d->leave($__internal_00ae76b383878787d669e9b58888ef9560c5f8523f895100954713502380fb1d_prof);

        
        $__internal_c50ad820667a9b4d688d7498f4ac2e04aacd2fcb8eac155c5c57ff4797baa3bd->leave($__internal_c50ad820667a9b4d688d7498f4ac2e04aacd2fcb8eac155c5c57ff4797baa3bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
